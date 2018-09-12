@extends('layouts.app')

@section('content')
<!-- GARDEN RESTAURANT -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.restaurants.title') }}</h2>
					<a href="{{ route('restaurants') }}" class="sidebarLink">{{ trans('local.overview') }}</a>
					<br>
					<a href="" class="sidebarLink selected">{{ trans('local.restaurants.garden.title') }}</a>
					<br>
					<a href="{{ route('restaurants.lobby') }}" class="sidebarLink">{{ trans('local.restaurants.lobby.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<h1>{{ trans('local.restaurants.garden.title') }}</h1>
					<img src="{{ asset('/img/restaurant.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.restaurants.garden.title') }}" title="{{ trans('local.restaurants.garden.title') }}">
					<br><br>
					<p class="restaurantInfo">
						{!! trans('local.restaurants.garden.description') !!}
					</p>
					<div class="row galleryOf">
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/restaurant/22.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.restaurants.garden.title') }}">
								<img src="{{ asset('/img/gallery/restaurant/22.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.restaurants.garden.title') }}" title="{{ trans('local.restaurants.garden.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/restaurant/23.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.restaurants.garden.title') }}">
								<img src="{{ asset('/img/gallery/restaurant/23.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.restaurants.garden.title') }}" title="{{ trans('local.restaurants.garden.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/restaurant/24.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.restaurants.garden.title') }}">
								<img src="{{ asset('/img/gallery/restaurant/24.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.restaurants.garden.title') }}" title="{{ trans('local.restaurants.garden.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/restaurant/25.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.restaurants.garden.title') }}">
								<img src="{{ asset('/img/gallery/restaurant/25.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.restaurants.garden.title') }}" title="{{ trans('local.restaurants.garden.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
