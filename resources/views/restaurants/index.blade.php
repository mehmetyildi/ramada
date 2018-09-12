@extends('layouts.app')

@section('content')
<!-- RESTAURANTS -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.restaurants.title') }}</h2>
					<a href="" class="sidebarLink selected">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('restaurants.garden') }}" class="sidebarLink">{{ trans('local.restaurants.garden.title') }}</a>
					<br>
					<a href="{{ route('restaurants.lobby') }}" class="sidebarLink">{{ trans('local.restaurants.lobby.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="roomCarouselRow row">
						<div class="col-md-12">
							<img src="{{ asset('/img/say-hello-to-gusto-black.png') }}" class="img-fluid comfortImage" alt="Say Hello To Gusto" alt="Say Hello To Gusto">
						</div>
					</div>
					<p class="restaurantInfo">
						{!! trans('local.restaurants.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
