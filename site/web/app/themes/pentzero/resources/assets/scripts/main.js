// import external dependencies
import 'jquery';


import 'bootstrap/dist/js/bootstrap';
// base package
import fontawesome from "@fortawesome/fontawesome";
// Facebook and Twitter icons
import faFacebookF from "@fortawesome/fontawesome-free-brands/faFacebookF";
import faTwitter from "@fortawesome/fontawesome-free-brands/faTwitter";
import faInstagram from "@fortawesome/fontawesome-free-brands/faInstagram";
import faYoutube from "@fortawesome/fontawesome-free-brands/faYoutube";
import faAngleLeft from "@fortawesome/fontawesome-free-solid/faAngleLeft";
import faAngleDown from "@fortawesome/fontawesome-free-solid/faAngleDown";
import faExclamationTriangle from "@fortawesome/fontawesome-free-solid/faExclamationTriangle";

fontawesome.config = {searchPseudoElements: true}

fontawesome.library.add(faFacebookF, faTwitter, faInstagram, faYoutube, faAngleLeft, faAngleDown, faExclamationTriangle);

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
