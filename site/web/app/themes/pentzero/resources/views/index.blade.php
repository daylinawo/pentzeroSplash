@extends('layouts.app')

@section('content')

<header class="page-header page-header--home">
  @include('partials.header')
</header>

<div class="slideshow-container">
  <div id="slideshow" class="slideshow">
    <div class="slide item-1"></div>
    <div class="slide item-2"></div>
    <div class="slide item-3"></div>
    <div class="slide item-4"></div>
    <div class="slide item-5"></div>
    <div class="slide item-6"></div>
    <div class="slide item-7"></div>
    <div class="slide item-9"></div>
    <div class="slide item-10"></div>
    <div class="slide item-12"></div>
    <div class="slide item-13"></div>
    <div class="slide item-14"></div>
  </div>
  <div class="c-card-wrapper">
    <div class="c-card">
      <h4 class="c-card__coming-soon-text">Coming soon</h4>
      <div class="signup signup--home">
        <h3 class="signup-title"> Subscribe</h3>
        <p class="signup-text">
          Sign up with your email and receive free news and updates
        </p>
        <? echo do_shortcode('[mc4wp_form id="11"]'); ?>
      </div>
      <div class="follow-group-container">
        <h4 class="follow-group--title">Follow us</h4>
        <ul class="follow-group">
          <li><a href="https://www.facebook.com/Pentzero" class="follow-btn follow-btn--fb"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.youtube.com/pentzero" class="follow-btn follow-btn--yt"><i class="fab fa-youtube"></i></a></li>
          <li><a href="https://twitter.com/Pentzero" class="follow-btn follow-btn--tw"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/pentzero/" class="follow-btn follow-btn--ig"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="home-footer">
  <div class="home-footer__c-wrap">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-4 order-lg-2">
          <div class="no-link-box no-link-box__about">
            <div class="no-link-box-center">
              <h3 class="no-link-box__title no-link-box__title--about">About</h3>
                <div class="no-link-box__subtitle">What is Pentzero?</div>
                <p class="no-link-box__text">Pentzero is the leading lifestyle portal. Featuring Luxury, News, Entertainment, Fashion and more.</p>
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

      <div class="home-footer--end">
        <a href="#">Terms & Conditions</a>
        <p>© Pentzero 2018</p>
      </div>

    </div>
  </div>
</div>
@endsection