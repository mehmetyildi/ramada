@extends('layouts.app')

@section('styles')
	<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
	<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
@endsection

@section('content')
<!-- STATIC NEWS -->
<div class="container-fluid containerTopGradient">
	<div class="mainContainer clearfix">
		<div class="row">
			<div class="col-md-12 sectionHeading">
				<h1 class="sectionTitle">{{ trans('local.news.n2.title') }}</h1>
				<!-- <span>05.10.2017</span> -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="{{ asset('/img/news/2.jpg') }}" class="fullWidth img-fluid" alt="{{ trans('local.news.n2.title') }}" title="{{ trans('local.news.n2.title') }}">
			</div>
			<div class="col-md-8 mb-4">
				{!! trans('local.news.n2.description') !!}
				<div class="shareThis clearfix">
	                <div id="shareSocial" style="float:right;"></div>
	                <br><br>
	            </div>
				<!--<div class="row"><div class="col-md-12"><hr><br></div></div>
				<div class="row">
					<div class="col-md-4">
						<a href="http://placehold.it/300x200" data-gallery><img src="http://placehold.it/300x200" class="fullWidth img-fluid" alt=""></a>
					</div>
					<div class="col-md-4">
						<a href="http://placehold.it/300x200" data-gallery><img src="http://placehold.it/300x200" class="fullWidth img-fluid" alt=""></a>
					</div>
					<div class="col-md-4">
						<a href="http://placehold.it/300x200" data-gallery><img src="http://placehold.it/300x200" class="fullWidth img-fluid" alt=""></a>
					</div>
				</div> -->
			</div>
		</div>
		<div class="row"><div class="col-md-12"><hr><br></div></div>

		<div class="row">
			<div class="col-md-12 sectionHeading">
				<h1 class="sectionTitle">{{ trans('local.news.other') }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="grayBg noPaddingTopBottom clearfix">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="campaignInfo campaignPaddingLeft clearfix">
								<h3>{{ trans('local.news.n1.title') }}</h3>
								<p>{{ trans('local.news.n1.caption') }}</p>
								<a href="{{ route('news.static.green-star-award') }}" class="moreDetailLink">{{ trans('local.readMore') }}</a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('/img/news/1.jpg') }}" class="fullWidth img-fluid" alt="{{ trans('local.news.n1.title') }}" title="{{ trans('local.news.n1.title') }}">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12"><br></div>
			<div class="col-md-12 mb-4">
				<div class="grayBg noPaddingTopBottom clearfix">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('/img/news/3.jpg') }}" class="fullWidth img-fluid" alt="{{ trans('local.news.n3.title') }}" title="{{ trans('local.news.n3.title') }}">
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="campaignInfo campaignPaddingRight clearfix">
								<h3>{{ trans('local.news.n3.title') }}</h3>
								<p>{{ trans('local.news.n3.caption') }}</p>
								<a href="{{ route('news.static.wedding-news') }}" class="moreDetailLink">{{ trans('local.readMore') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12"><br></div>
			<div class="col-md-12 mb-4">
				<div class="grayBg noPaddingTopBottom clearfix">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="campaignInfo campaignPaddingLeft clearfix">
								<h3>{{ trans('local.news.n4.title') }}</h3>
								<p>{{ trans('local.news.n4.caption') }}</p>
								<a href="{{ route('news.static.susan-kardes') }}" class="moreDetailLink">{{ trans('local.readMore') }}</a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('/img/news/4.jpg') }}" class="fullWidth img-fluid" alt="{{ trans('local.news.n4.title') }}" title="{{ trans('local.news.n4.title') }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
	<script>
	    jQuery("#shareSocial").jsSocials({
	        shareIn: "popup",
	        showLabel: false,
	        showCount: false,
	        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest"]
	    });
	</script>
@endsection