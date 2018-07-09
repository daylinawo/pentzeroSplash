@extends('layouts.app')


@section('content')
<div id="particle-container">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</div>
<div class="o-bg o-bg__submissions">
	<div style="background: rgba(25, 25, 25, 0.69); min-height: 100vh;">
	<div class="page-header page-header--opage page-header--submissions">
		<a href="/index.php" class="nav-home"><i class="fas fa-angle-left"></i></a>
		<a href="#boxzilla-31" class="nav-newsletter"><i class="fas fa-envelope"></i> Newsletter Sign up</a>
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

	<div class="page-footer page-footer--opage page-footer--submissions">
		<div class="page-footer__wrapper">
			<ul class="page-footer__links">
				<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
				<li><a href="/submissions/">Submissions</a></li>
				<li><a href="/contact/">Contact Us</a></li>
				<li><a href="#">Terms & Conditions</a></li>
			</ul>
			 <div class="follow-group-container">
				<ul class="follow-group">
				  <li><a href="https://www.facebook.com/Pentzero" class="follow-btn follow-btn--fb"><i class="fab fa-facebook-f"></i></a></li>
				  <li><a href="https://www.youtube.com/pentzero" class="follow-btn follow-btn--yt"><i class="fab fa-youtube"></i></a></li>
				  <li><a href="https://twitter.com/Pentzero" class="follow-btn follow-btn--tw"><i class="fab fa-twitter"></i></a></li>
				  <li><a href="https://www.instagram.com/pentzero/" class="follow-btn follow-btn--ig"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
        	<p style="font-size: 11px; margin: 0;">© Pentzero 2018</p>
	    </div>
	</div>
</div>
</div>

@endsection
