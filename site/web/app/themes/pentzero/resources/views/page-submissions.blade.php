@extends('layouts.app')


@section('content')
<div class="page-container page-container--pagewform">
	<div class="page-header page-header--page page-header--submissions">
		@include('partials.page-header')
	</div>

	<div class="p-card container">
		<div class="p-card-wrapper d-flex flex-column flex-lg-row">
			<div class="p-card-header col-md-12 col-lg-6 col-xl-7 order-lg-2 p-0">
				<div class="image image--submissions"></div>
			</div>
			<div class="p-card-body col-md-12 col-lg-6 col-xl-5 align-self-center order-lg-1">
				<div class="p-card-body__header">
					<h1 class="title">Submissions</h1>
					<h4 class="upper">Send in your content</h4>
					<p class="text">Fill out the form below to submit your content.</p>
				</div>
				<div class="p-card-form p-card-form__submissions">
			  		<div class="p-card-form__wrapper">
			  			<? echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			  			<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('partials.page-footer')
</div>

<div class="o-bg o-bg__submissions"></div>

@endsection