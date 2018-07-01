@extends('layouts.app')

@section('content')

<header class="page-header page-header-home">
  @include('partials.page-header')
</header>


<div class="module-media-container">
  <div id="module-media-slideshow" class="module-media-slideshow">
    <div class="slideshow__item slideshow__item-1"></div>
    <div class="slideshow__item slideshow__item-2"></div>
    <div class="slideshow__item slideshow__item-3"></div>
    <div class="slideshow__item slideshow__item-4"></div>
    <div class="slideshow__item slideshow__item-5"></div>
    <div class="slideshow__item slideshow__item-6"></div>
    <div class="slideshow__item slideshow__item-7"></div>
    <div class="slideshow__item slideshow__item-9"></div>
    <div class="slideshow__item slideshow__item-10"></div>
    <div class="slideshow__item slideshow__item-11"></div>
  </div>
  <div class="module-media-c-wrapper">
    <div class="module-media-card">
      <h4 class="coming-soon-text">Coming soon</h4>
      <div class="signup signup--home">
        <? echo do_shortcode('[mc4wp_form id="11"]'); ?>
      </div>
      <div class="follow-group-container">
        <h4 class="follow-group--title">Follow us</h4>
        <ul class="follow-group">
          <li><a href="#" class="follow-btn follow-btn--fb"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#" class="follow-btn follow-btn--yt"><i class="fab fa-youtube"></i></a></li>
          <li><a href="#" class="follow-btn follow-btn--tw"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#" class="follow-btn follow-btn--ig"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="page-footer">
  <div class="page-footer__content-wrap">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-4 order-lg-2">
          <div class="no-link-box no-link-box__about">
            <div class="no-link-box-center">
              <h3 class="no-link-box__title no-link-box__title--about">About</h3>
                <div class="no-link-box__subtitle">What is Pentzero?</div>
                <p class="no-link-box__text">Pentzero.com is a media company mainly showcasing the affluent lifestyle of celebrity figures, high networth individuals and socialites. Bringing forth coverage in News, Luxury, Entertainment and Fashion.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 order-lg-1">
          <div class="link-box link-box__contact-us">
            <div class="link-box__header">
              <a href="/contact-us/" class="opacity-hover">
                <picture>
                  <source srcset="@asset('images/contact-landscape_md.jpg') 405w, @asset('images/contact-landscape_lg.jpg') 810w" media="(min-width: 768px)">
                  <source srcset="@asset('images/contact-portrait_xs.jpg') 200w, @asset('images/contact-portrait_sm.jpg') 300w, @asset('images/contact-portrait_md.jpg') 400w" media="(min-width: 0)">
                  <img src="@asset('images/contact-portrait_xs.jpg')" class="img-fluid"/>
                </picture>
              </a>
            </div>
            <div class="link-box__body">
              <h4 class="link-box__title link-box__title--contact-us">Contact Us</h4>
              <div class="link-box__text">Send us a message</div>
              <a href="/contact-us/" class="link-box__btn">Contact Us</a>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-4 order-lg-3">
          <div class="link-box link-box__submissions">
            <div class="link-box__header">
              <a href="/submissions/" class="opacity-hover">
                <picture>
                  <source srcset="@asset('images/submissions-landscape_md.jpg') 405w, @asset('images/submissions-landscape_lg.jpg') 810w" media="(min-width: 768px)">
                  <source srcset="@asset('images/submissions-portrait_xs.jpg') 200w, @asset('images/submissions-portrait_sm.jpg') 300w, @asset('images/submissions-portrait_md.jpg') 400w" media="(min-width: 0)">
                  <img src="@asset('images/submissions-portrait_xs.jpg')" class="img-fluid"/>
                </picture>
              </a>
            </div>
            <div class="link-box__body">
              <h4 class="link-box__title link-box__title--submissions">Send in your content</h4>
              <div class="link-box__text">Share exclusive content with us</div>
              <a href="/submissions/" class="link-box__btn">Send in your content</a>
            </div>
          </div>
        </div>

      </div>

      <div class="page-footer__end">
        <a href="#" class="t-c_link">Terms & Conditions</a>
        <p class="copyright-text">© Pentzero 2018</p>
      </div>

    </div>
  </div>
</div>
@endsection