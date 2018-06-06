<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

class GW_Rename_Uploaded_Files {

    public function __construct( $args = array() ) {

        // set our default arguments, parse against the provided arguments, and store for use throughout the class
        $this->_args = wp_parse_args( $args, array(
            'form_id'  => false,
            'field_id' => false,
            'template' => ''
        ) );

        // do version check in the init to make sure if GF is going to be loaded, it is already loaded
        add_action( 'init', array( $this, 'init' ) );

    }

    public function init() {

        // make sure we're running the required minimum version of Gravity Forms
        if( ! is_callable( array( 'GFFormsModel', 'get_physical_file_path' ) ) ) {
            return;
        }

        add_filter( 'gform_entry_post_save', array( $this, 'rename_uploaded_files' ), 9, 2 );
        add_filter( 'gform_entry_post_save', array( $this, 'stash_uploaded_files' ), 99, 2 );

        add_action( 'gform_after_update_entry', array( $this, 'rename_uploaded_files_after_update' ), 9, 2 );
        add_action( 'gform_after_update_entry', array( $this, 'stash_uploaded_files_after_update' ), 99, 2 );

    }

    function rename_uploaded_files( $entry, $form ) {

        if( ! $this->is_applicable_form( $form ) ) {
            return $entry;
        }

        foreach( $form['fields'] as &$field ) {

            if( ! $this->is_applicable_field( $field ) ) {
                continue;
            }

            $uploaded_files = rgar( $entry, $field->id );

            if( empty( $uploaded_files ) ) {
                continue;
            }

            $uploaded_files = $this->parse_files( $uploaded_files, $field );
            $stashed_files  = $this->parse_files( gform_get_meta( $entry['id'], 'gprf_stashed_files' ), $field );
            $renamed_files  = array();

            foreach( $uploaded_files as $_file ) {

                // Don't rename the same files twice.
                if( in_array( $_file, $stashed_files ) ) {
                    $renamed_files[] = $_file;
                    continue;
                }

                $dir  = wp_upload_dir();
                $dir  = $this->get_upload_dir( $form['id'] );
                $file = str_replace( $dir['url'], $dir['path'], $_file );

                if( ! file_exists( $file ) ) {
                    continue;
                }

                $renamed_file = $this->rename_file( $file, $entry );

                if ( ! is_dir( dirname( $renamed_file ) ) ) {
                    wp_mkdir_p( dirname( $renamed_file ) );
                }

                $result = rename( $file, $renamed_file );

                $renamed_files[] = $this->get_url_by_path( $renamed_file );

            }

            // In cases where 3rd party add-ons offload the image to a remote location, no images can be renamed.
            if( empty( $renamed_files ) ) {
                continue;
            }

            if( $field->get_input_type() == 'post_image' ) {
                $value = str_replace( $uploaded_files[0], $renamed_files[0], rgar( $entry, $field->id ) );
            } else if( $field->multipleFiles ) {
                $value = json_encode( $renamed_files );
            } else {
                $value = $renamed_files[0];
            }

            GFAPI::update_entry_field( $entry['id'], $field->id, $value );

            $entry[ $field->id ] = $value;

        }

        return $entry;
    }

    function get_upload_dir( $form_id ) {
        $dir = GFFormsModel::get_file_upload_path( $form_id, 'PLACEHOLDER' );
        $dir['path'] = dirname( $dir['path'] );
        $dir['url']  = dirname( $dir['url'] );
        return $dir;
    }

    function rename_uploaded_files_after_update( $form, $entry_id ) {
        $entry = GFAPI::get_entry( $entry_id );
        $this->rename_uploaded_files( $entry, $form );
    }

    /**
     * Stash the "final" version of the files after other add-ons have had a chance to interact with them.
     *
     * @param $entry
     * @param $form
     */
    function stash_uploaded_files( $entry, $form ) {

        foreach ( $form['fields'] as &$field ) {

            if ( ! $this->is_applicable_field( $field ) ) {
                continue;
            }

            $uploaded_files = rgar( $entry, $field->id );
            gform_update_meta( $entry['id'], 'gprf_stashed_files', $uploaded_files );

        }

        return $entry;
    }

    function stash_uploaded_files_after_update( $form, $entry_id ) {
        $entry = GFAPI::get_entry( $entry_id );
        $this->stash_uploaded_files( $entry, $form );
    }

    function rename_file( $file, $entry ) {

        $new_file = $this->get_template_value( $this->_args['template'], $file, $entry );
        $new_file = $this->increment_file( $new_file );

        return $new_file;
    }

    function increment_file( $file ) {

        $file_path = GFFormsModel::get_physical_file_path( $file );
        $pathinfo  = pathinfo( $file_path );
        $counter   = 1;

        // increment the filename if it already exists (i.e. balloons.jpg, balloons1.jpg, balloons2.jpg)
        while ( file_exists( $file_path ) ) {
            $file_path = str_replace( ".{$pathinfo['extension']}", "{$counter}.{$pathinfo['extension']}", GFFormsModel::get_physical_file_path( $file ) );
            $counter++;
        }

        $file = str_replace( basename( $file ), basename( $file_path ), $file );

        return $file;
    }

    function is_path( $filename ) {
        return strpos( $filename, '/' ) !== false;
    }

    function get_template_value( $template, $file, $entry ) {

        $info = pathinfo( $file );

        if( strpos( $template, '/' ) === 0 ) {
            $dir      = wp_upload_dir();
            $template = $dir['basedir'] . $template;
        } else {
            $template = $info['dirname'] . '/' . $template;
        }

        // replace our custom "{filename}" psuedo-merge-tag
        $value = str_replace( '{filename}', $info['filename'], $template );

        // replace merge tags
        $form  = GFAPI::get_form( $entry['form_id'] );
        $value = GFCommon::replace_variables( $value, $form, $entry, false, true, false, 'text' );

        // make sure filename is "clean"
        $filename = $this->clean( basename( $value ) );
        $value    = str_replace( basename( $value ), $filename, $value );

        // append our file ext
        $value .= '.' . $info['extension'];

        return $value;
    }

    function remove_slashes( $value ) {
        return stripslashes( str_replace( '/', '', $value ) );
    }

    function is_applicable_form( $form ) {

        $form_id = isset( $form['id'] ) ? $form['id'] : $form;

        return $form_id == $this->_args['form_id'];
    }

    function is_applicable_field( $field ) {

        $is_file_upload_field   = in_array( GFFormsModel::get_input_type( $field ), array( 'fileupload', 'post_image' ) );
        $is_applicable_field_id = $this->_args['field_id'] ? $field['id'] == $this->_args['field_id'] : true;

        return $is_file_upload_field && $is_applicable_field_id;
    }

    function clean( $str ) {
        return $this->remove_slashes( sanitize_title_with_dashes( strtr(
            utf8_decode( $str ),
            utf8_decode( 'ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
            'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy'
        ), 'save' ) );
    }

    function get_url_by_path( $file ) {

        $dir = wp_upload_dir();
        $url = str_replace( $dir['basedir'], $dir['baseurl'], $file );

        return $url;
    }

    function parse_files( $files, $field ) {

        if( empty( $files ) ) {
            return array();
        }

        if( $field->get_input_type() == 'post_image' ) {
            $file_bits = explode( '|:|', $files );
            $files = array( $file_bits[0] );
        } else if( $field->multipleFiles ) {
            $files = json_decode( $files );
        } else {
            $files = array( $files );
        }

        return $files;
    }

}

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

# Configuration

new GW_Rename_Uploaded_Files( array(
    'form_id' => 1,
    'field_id' => 9,
    'template' => 'Its-Working-{filename}' // most merge tags are supported, original file extension is preserved
) );

 add_action( 'wp_ajax_nopriv_get_form', 'get_form' );
 add_action( 'wp_ajax_get_form', 'get_form' );

 function get_form() {
    gravity_form( 1,false, false, false, false, true );
    die();
}