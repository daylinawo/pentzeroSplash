@extends('layouts.app')


@section('content')
<div class="page-container">
	<div class="page-header page-header--page page-header--contact-us">
    	<div class="page-header__container">
			<a href="/index.php" class="back-link"><i class="fas fa-angle-left"></i></a>
			<a href="#boxzilla-31" class="newsletter-link"><i class="fas fa-envelope"></i></a>
			@include('partials.page-header')
		</div>
	</div>

	<div class="p-card">
		<div class="p-card__container">
			<div class="p-card-header">
				<div class="image image--contact-us"></div>
			</div>
			<div class="p-card-body">
				<div class="p-card-body__header">
					<h4 class="upper">Lets talk</h4>
					<h1 class="title">Contact Us</h1>
					<p class="text">Use the form below to send us a message</p>
				</div>
				<div class="aform aform__contact-us">
			  		<div class="aform__wrapper">
			  			<? echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
			  			<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('partials.page-footer')
</div>

<div class="o-bg o-bg__contact-us"></div>

@endsection