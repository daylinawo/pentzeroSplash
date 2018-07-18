@extends('layouts.app')


@section('content')
<div class="page-container page-container--thank-you">
	<div class="page-header page-header--page page-header--contact-us">
		@include('partials.page-header')
	</div>

	<div class="thank-you container">
		<div class="thank-you-wrapper d-flex">
			<div class="thank-you-content col-12 col-md-6 offset-md-3 align-self-center">
				<div class="thank-you__header">
					<h1 class="title">Thank You</h1>
					<h4 class="upper">For your message</h4>
				</div>
				<hr>
				<div class="thank-you__body">
					<p class="text">Our team will try to get a response to you as soon as possible. In the meantime, why not check us out on social media?</p>
					<div class="follow-group-container">
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
	</div>
	@include('partials.page-footer')
</div>

<div class="o-bg o-bg__contact-us"></div>

@endsection