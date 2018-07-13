@extends('layouts.app')


@section('content')
<div class="page-container">
	<div class="page-header page-header--page page-header--submissions">
    	<div class="page-header__container">
			<a href="/index.php" class="back-link"><i class="fas fa-angle-left"></i></a>
			<a href="#boxzilla-31" class="newsletter-link"><i class="fas fa-envelope"></i></a>
			@include('partials.page-header')
		</div>
	</div>

	<div class="p-card">
		<div class="p-card__container">
			<div class="p-card-body">
				<div class="p-card-body__header">
					<h4 class="upper">Send in your content</h4>
					<h1 class="title">Submissions</h1>
					<p class="text">Fill out the form below to submit your content.</p>
				</div>
				<div class="aform aform__submissions">
			  		<div class="aform__wrapper">
			  			<? echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			  			<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="p-card-header">
				<div class="image image--submissions"></div>
			</div>
		</div>
	</div>
	@include('partials.page-footer')
</div>

<div class="o-bg o-bg__submissions"></div>

@endsection