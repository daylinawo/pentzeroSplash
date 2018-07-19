@extends('layouts.app')


@section('content')
<div class="page-container page-container--pagewform">
	<div class="page-header page-header--page page-header--contact-us">
		@include('partials.page-header')
	</div>

	<div class="p-card container">
		<div class="p-card-wrapper d-flex flex-column flex-lg-row">
			<div class="p-card-header col-md-12 col-lg-6 col-xl-7 order-lg-2 p-0">
				<div class="image image--contact-us"></div>
			</div>
			<div class="p-card-body col-md-12 col-lg-6 col-xl-5 align-self-center order-lg-1">
				<div class="p-card-body__header">
					<h1 class="title">Contact Us</h1>
					<h4 class="upper">Lets talk</h4>
					<p class="text">Use the form below to send us a message</p>
				</div>
				<div class="p-card-form p-card-form__contact-us">
			  		<div class="p-card-form__wrapper">
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