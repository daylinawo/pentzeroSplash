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
  </div>
  <div class="module-media-c-wrapper">
    <div class="module-media-card">
      <div class="module-media-card-body">
        <h4 class="coming-soon-text">Coming soon</h4>
        <div class="signup signup--home">
          <? echo do_shortcode('[mc4wp_form id="11"]'); ?>
        </div>
      </div>
      <div class="module-media-card-footer">
        <div class="follow-group-container">
          <h4 class="follow-group--title">Follow us on</h4>
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
</div>

<div class="page-footer">
  <div class="page-footer-content-wrap">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="link-box link-box--contact-us">
            <a href="/contact-us/" class="opacity-hover"><div class="global-image-wrapper"><img src="@asset('images/diddy-phone-1280x960.png')" class="img-fluid"/></div></a>
            <h4 class="link-box-title link-box-title--contact-us">Contact Us</h4>
            <div class="link-box-text">Send us a message</div>
            <a href="/contact-us/" class="link-box-btn">Contact Us</a>
          </div>
        </div>

        <div class="col-12 col-lg-4">
          <div class="no-link-box no-link-box--about">
            <div class="no-link-box-center">
              <h3 class="no-link-box-title no-link-box-title--about">About</h3>
                <div class="no-link-box-foreword">What is Pentzero?</div>
                <p class="no-link-box-text">Pentzero.com is a media company mainly showcasing the affluent lifestyle of celebrity figures, high networth individuals and socialites. Bringing forth coverage in News, Luxury, Entertainment and Fashion.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
          <div class="link-box link-box--submissions">
            <a href="/submissions/" class="opacity-hover"><div class="global-image-wrapper"><img src="@asset('images/lohan-1280x960.png')" class="img-fluid"/></div></a>
            <h4 class="link-box-title link-box-title--submissions">Send in your content</h4>
            <div class="link-box-text">Share exclusive content with us</div>
            <a href="/submissions/" class="link-box-btn">Send in your content</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection