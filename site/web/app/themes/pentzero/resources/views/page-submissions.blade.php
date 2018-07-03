@extends('layouts.app')


@section('content')
<div class="page-header page-header-fpage">
	@include('partials.page-header')
</div>
<div class="page-content">
	<div class="page-content__container">
		<div class="page-content__wrapper">
			<div class="page-content__body">
				<h1 class="page__title">Submissions</h1>
				<div class="aform aform__submissions">
					<p class="aform__text">Fill out the form below to submit your content. All fields are required so please ensure that none are left blank.</p>
			  		<div class="aform__wrapper">
			  			<? echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			  			<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-footer page-footer__submissions">
	<div class="page-footer__wrapper">
		<img src="<?= get_theme_file_uri(); ?>/resources/assets/images/logo.png" class="page-footer__logo" />
		<ul class="page-footer__links">
			<li><a href="/index/">Home</a></li>
			<li><a href="/submissions/">Submissions</a></li>
			<li><a href="/contact/">Contact Us</a></li>
		</ul>
	    <div class="fsignup-footer">
	        <div class="signup-wrapper">
	        	<? echo do_shortcode('[mc4wp_form id="11"]'); ?>
	        </div>
	    </div>
    </div>
</div>

@endsection
