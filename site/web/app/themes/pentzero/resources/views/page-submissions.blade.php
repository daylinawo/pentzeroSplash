@extends('layouts.app')


@section('content')
@include('partials.page-header')

<div class="pform pform--submissions">
	<div class="container">
		@include('partials.form-header')
		<div class="row">
			<div class="col-md-6 col-xl-7">
				<div class="pform-form">
					<div class="pform-form-c">
						<div class="pform-form--heading">
							<h1 class="pform-form--title">Submit your content</h1>
							<p class="pform-form--text">Fill out the form below to submit your content.</p>
						</div>
						<div class="pform-form-f">
					  		<div class="pform-form--fwrap">
					  			<? echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
					  			<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-5">
				<div class="pform-side">
					<div class="pform-side-c">
						<h3 class="pform-side--title">More</h3>
						<div class="pform-side--linkto">
							<a href="/contact/" class="linkto">Contact Us</a>
							<div class="linkto-text">Please feel free to get in touch with us</div>
						</div>
				        <div class="fsignup-side">
				            <div class="signup-wrapper">
				            	<? echo do_shortcode('[mc4wp_form id="11"]'); ?>
				            </div>
				        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
