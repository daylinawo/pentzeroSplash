@extends('layouts.app')


@section('content')
@include('partials.page-header')

<div class="pform pform--submissions">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-xl-6 offset-md-2 offset-xl-3">
				<div class="pform-wrap">
					@include('partials.form-header')
					<div class="pform-heading">
						<h1 class="pform-title">Submit your content</h1>
						<p class="pform-text">Fill out the form below to submit your content.</p>
					</div>
					<div class="pform-form-c">
				  		<div class="pform-form-wrap">
							<? echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
				  			<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
