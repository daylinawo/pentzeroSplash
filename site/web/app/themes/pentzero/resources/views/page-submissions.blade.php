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

<div class="form-section">
	<div class="container-fluid">
		<div class="form-section-wrap">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<header class="form-section-header">
						<h1 class="form-section-title">Send us your content</h1>
						<p class="form-section-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel massa nec felis pretium malesuada at et mauris. Cras quis mauris sit amet nulla vehicula pulvinar. Donec dictum tempus magna ut molestie.</p>
					</header>
					<div class="sform-container">
				  		<div class="sform-wrapper">
				  			<? echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
						   <? // echo do_shortcode ('[contact-form-7 id="19" title="Content Submission Form"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
