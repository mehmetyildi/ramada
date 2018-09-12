@extends('layouts.app')

@section('content')
<!-- LOBBY LOUNGE -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.restaurants.title') }}</h2>
					<a href="{{ route('restaurants') }}" class="sidebarLink">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('restaurants.garden') }}" class="sidebarLink">{{ trans('local.restaurants.garden.title') }}</a>
					<br>
					<a href="" class="sidebarLink selected">{{ trans('local.restaurants.lobby.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<h1>{{ trans('local.restaurants.lobby.title') }}</h1>
					<img src="{{ asset('/img/lobby-lounge.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.restaurants.lobby.title') }}" title="{{ trans('local.restaurants.lobby.title') }}">
					<br><br>
					<p class="restaurantInfo">
						{!! trans('local.restaurants.lobby.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
