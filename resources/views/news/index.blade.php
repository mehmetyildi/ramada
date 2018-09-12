@extends('layouts.app')

@section('content')
<!-- NEWS -->
<div class="container-fluid containerTopGradient">
	<div class="mainContainer clearfix">
		<div class="row">
			<div class="col-md-12 sectionHeading">
				<h1 class="sectionTitle">{{ trans('local.news.title') }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="grayBg noPaddingTopBottom clearfix">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('/img/news/1.jpg') }}" class="fullWidth img-fluid" alt="{{ trans('local.news.n1.title') }}" title="{{ trans('local.news.n1.title') }}">
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="campaignInfo campaignPaddingRight clearfix">
								<h3>{{ trans('local.news.n1.title') }}</h3>
								<p>{{ trans('local.news.n1.caption') }}</p>
								<a href="{{ route('news.static.green-star-award') }}" class="moreDetailLink">{{ trans('local.readMore') }}</a>
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
								<h3>{{ trans('local.news.n2.title') }}</h3>
								<p>{{ trans('local.news.n2.caption') }}</p>
								<a href="{{ route('news.static.peace-patch-festival') }}" class="moreDetailLink">{{ trans('local.readMore') }}</a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('/img/news/2.jpg') }}" class="fullWidth img-fluid" alt="{{ trans('local.news.n2.title') }}" title="{{ trans('local.news.n2.title') }}">
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
