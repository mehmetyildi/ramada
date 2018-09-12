@extends('layouts.app')

@section('content')
<!-- ROOMS -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.rooms.title') }}</h2>
					<a href="" class="sidebarLink selected">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('rooms.deluxe-room') }}" class="sidebarLink">{{ trans('local.rooms.deluxe.title') }}</a>
					<!-- <br>
					<a href="{{ route('rooms.superior-room') }}" class="sidebarLink">{{ trans('local.rooms.superior.title') }}</a> -->
					<br>
					<a href="{{ route('rooms.corner-suite') }}" class="sidebarLink">{{ trans('local.rooms.corner.title') }}</a>
					<br>
					<a href="{{ route('rooms.executive-suite') }}" class="sidebarLink">{{ trans('local.rooms.executive.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="roomCarouselRow row">
						<div class="col-md-12">
							<img src="{{ asset('/img/say-hello-to-comfort.png') }}" class="img-fluid comfortImage" alt="Say Hello To Comfort" title="Say Hello To Comfort">
						</div>
					</div>
					<p class="restaurantInfo">
						{!! trans('local.rooms.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="mainContainer noPaddingTop">
		<div class="roomCarouselRow pageWithSideBar noPaddingTop row">
			<div class="col-md-12">
				<div id="ramadaCarousel" class="carousel slide relative" data-ride="carousel">
				  	<ol class="carousel-indicators">
				    	<li data-target="#ramadaCarousel" data-slide-to="0" class="active"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="1"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="2"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="3"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="4"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="5"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="6"></li>
				    	<li data-target="#ramadaCarousel" data-slide-to="7"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/1.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/2.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/superior/1.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/superior/3.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/executive/2.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/executive/1.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/2.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<div class="carousel-item">
				      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/1.jpg') }}" alt="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}" title="Ramada Plaza Tekstilkent {{ trans('local.rooms.title') }}"">
				    	</div>
				    	<a class="carousel-control-prev" href="#ramadaCarousel" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
					  	</a>
					  	<a class="carousel-control-next" href="#ramadaCarousel" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
					  	</a>
				  	</div>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
