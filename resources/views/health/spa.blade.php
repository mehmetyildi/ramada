@extends('layouts.app')

@section('content')
<!-- SPA -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.health.title') }}</h2>
					<a href="{{ route('health') }}" class="sidebarLink">{{ trans('local.overview') }}</a>
					<br>
					<a href="" class="sidebarLink selected">{{ trans('local.health.spa.title') }}</a>
					<br>
					<a href="{{ route('health.fitness') }}" class="sidebarLink">{{ trans('local.health.fitness.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<h1>{{ trans('local.health.spa.title') }}</h1>
					<img src="{{ asset('/img/about-spa2.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.health.spa.title') }}" title="{{ trans('local.health.spa.title') }}">
					<br><br>
					<p class="restaurantInfo">
						{!! trans('local.health.spa.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
