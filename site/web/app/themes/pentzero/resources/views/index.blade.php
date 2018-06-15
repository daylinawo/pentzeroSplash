@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="top-half">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="content-wrap content-wrap--top">
          <h4 class="coming-soon-text">Coming soon</h4>
          <hr class="c-divider">
          <div class="fsignup-home">
            <div class="signup-wrapper">
              <? echo do_shortcode('[mc4wp_form id="11"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bottom-half">
  <div class="container h-100">
    <div class="d-flex h-100 align-items-center">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <div class="content-wrap content-wrap--bottom">

          <ul class="nav section-nav justify-content-center mb-3" id="pills-tab" role="tablist">
            <li>
              <a class="active section-nav--about" id="pills-about-tab" data-toggle="pill" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
            </li>
            <li>
              <a class="section-nav--conact" id="pills-contact-tab" data-toggle="pill" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
          </ul>

          <div class="tab-content" id="pills-tabContent">

            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="pills-about-tab">
              <div class="about-section">
              <h3 class="section-title section-title--about">About</h3>
                <p class="about-section-text">Founded in 2012 with its Headquarters based in London, England. Pentzero.com is a media company mainly showcasing the affluent lifestyle of celebrity figures, high networth individuals and socialites. Bringing forth coverage in News, Luxury, Entertainment and Fashion.</p>
            </div>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="contact-section">
              <h3 class="section-title section-title--contact">Contact</h3>
              <ul class="contact-list">
                <li><a href="/submissions/">Send in your content</a></li>
                <li><a href="/contact-us/">Contact Us</a></li>
              </ul>
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
    </div>
  </div>
</div>
@endsection