@extends('layouts.app')

@section('content')
<!-- HEALTH -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.health.title') }}</h2>
					<a href="" class="sidebarLink selected">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('health.spa') }}" class="sidebarLink">{{ trans('local.health.spa.title') }}</a>
					<br>
					<a href="{{ route('health.fitness') }}" class="sidebarLink">{{ trans('local.health.fitness.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="roomCarouselRow row">
						<div class="col-md-12">
							<img src="{{ asset('/img/say-hello-to-comfort.png') }}" class="img-fluid comfortImage" alt="Say Hello To Comfort" title="Say Hello To Comfort">
						</div>
					</div>
					<p class="restaurantInfo">
						{!! trans('local.health.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection