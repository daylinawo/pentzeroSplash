@extends('layouts.app')

@section('content')

<header class="page-header page-header-home">
  @include('partials.page-header')
  <h4 class="coming-soon-text">Coming soon</h4>
</header>

<div class="module-media-container">
  <div class="module-media-wrapper">
    <div class="fsignup fsignup--home">
      <div class="fsignup-signup-wrapper fsignup-signup-wrapper--home">
        <? echo do_shortcode('[mc4wp_form id="11"]'); ?>
      </div>
    </div>
    <div class="component-gradient-bottom"></div>
  </div>
</div>

<div class="page-footer">
  <div class="page-footer-content-wrap">
    <div class="container-fluid h-100">
      <div class="row h-100">

          <div class="col-12 col-lg-4">
            <div class="no-link-box no-link-box--about">
              <div class="no-link-box-center">
                <h3 class="no-link-box-title no-link-box-title--about">About</h3>
                  <div class="no-link-box-foreword">Pentzero.com is a media company</div>
                  <p class="no-link-box-text">Pentzero.com is a media company mainly showcasing the affluent lifestyle of celebrity figures, high networth individuals and socialites. Bringing forth coverage in News, Luxury, Entertainment and Fashion.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="link-box link-box--contact-us">
              <a href="/contact-us/" class="opacity-hover"><div class="global-image-wrapper"><img src="@asset('images/contact-us-thumbl.png')" class="img-fluid"/></div></a>
              <h4 class="link-box-title link-box-title--contact-us">Contact Us</h4>
              <div class="link-box-text">Send us a message</div>
              <a href="/contact-us/" class="link-box-btn">Contact Us</a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="link-box link-box--submissions">
              <a href="/submissions/" class="opacity-hover"><div class="global-image-wrapper"><img src="@asset('images/submissions-thumb.png')" class="img-fluid"/></div></a>
              <h4 class="link-box-title link-box-title--submissions">Send in your content</h4>
              <div class="link-box-text">Share exclusive content with us</div>
              <a href="/submissions/" class="link-box-btn">Send in your content</a>
            </div>
          </div>
      </div>
    </div>

    <div class="follow-us-section">
      <ul class="follow-group">
        <li><h3 class="follow-group--title">Follow us</h3></li>
        <li><a href="#" class="follow-btn follow-btn--fb"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" class="follow-btn follow-btn--yt"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#" class="follow-btn follow-btn--tw"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" class="follow-btn follow-btn--ig"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>

  </div>
</div>
@endsection