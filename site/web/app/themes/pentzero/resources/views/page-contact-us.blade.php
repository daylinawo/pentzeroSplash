@extends('layouts.app')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div class="content-wrap content-wrap--top">
				@include('partials.page-header')
			</div>
		</div>
	</div>
</div>

<div class="pform pform--contact">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-xl-6 offset-md-2 offset-xl-3">
				<div class="pform-wrap">
					@include('partials.form-header')
					<div class="pform-heading">
						<h1 class="pform-title">Contact Us</h1>
						<p class="pform-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="pform-form-c">
				  		<div class="pform-form-wrap">
				  			<? echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
				  			<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
