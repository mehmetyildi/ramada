@extends('layouts.app')

@section('content')
<!-- CORNER SUITE -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.nav.rooms') }}</h2>
					<a href="{{ route('rooms.index') }}" class="sidebarLink ">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('rooms.deluxe-room') }}" class="sidebarLink">{{ trans('local.rooms.deluxe.title') }}</a>
					<!-- <br>
					<a href="room-superior-king.php" class="sidebarLink">{{ trans('local.rooms.superior.title') }}</a> -->
					<br>
					<a href="" class="sidebarLink selected">{{ trans('local.rooms.corner.title') }}</a>
					<br>
					<a href="{{ route('rooms.executive-suite') }}" class="sidebarLink">{{ trans('local.rooms.executive.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<h1>{{ trans('local.rooms.corner.title') }}</h1>
					<div id="ramadaCarousel" class="carousel slide relative" data-ride="carousel">
					  	<ol class="carousel-indicators">
					    	<li data-target="#ramadaCarousel" data-slide-to="0" class="active"></li>
					    	<li data-target="#ramadaCarousel" data-slide-to="1"></li>
					    	<li data-target="#ramadaCarousel" data-slide-to="2"></li>
					    	<li data-target="#ramadaCarousel" data-slide-to="3"></li>
					  	</ol>
					  	<div class="carousel-inner">
					  		<div class="carousel-item active">
					      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/4.jpg') }}" alt="{{ trans('local.rooms.corner.title') }}" title="{{ trans('local.rooms.corner.title') }}">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/1.jpg') }}" alt="{{ trans('local.rooms.corner.title') }}" title="{{ trans('local.rooms.corner.title') }}">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/2.jpg') }}" alt="{{ trans('local.rooms.corner.title') }}" title="{{ trans('local.rooms.corner.title') }}">
					    	</div>
					    	<div class="carousel-item">
					      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/rooms/corner/3.jpg') }}" alt="{{ trans('local.rooms.corner.title') }}" title="{{ trans('local.rooms.corner.title') }}">
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
					<div class="mt-4"></div>
					<div class="row roomInfoRow">
						<div class="col-md-12">
							<p>{!! trans('local.rooms.corner.description') !!}</p>
						</div>
						<div class="col-md-5 col-xs-12 roomFeatures mt-4">
							<span class="roomFeature kasa">{{ trans('local.rooms.kasa') }}</span>
							<span class="roomFeature utu">{{ trans('local.rooms.utu') }}</span>
							<span class="roomFeature pc">{{ trans('local.rooms.pc') }}</span>
							<span class="roomFeature calisma">{{ trans('local.rooms.calisma') }}</span>
							<span class="roomFeature kahve">{{ trans('local.rooms.kahve') }}</span>
							<span class="roomFeature wifi">{{ trans('local.rooms.wifi') }}</span>
							<span class="roomFeature tv">{{ trans('local.rooms.tv') }}</span>
							
						</div>
						<div class="col-md-5 col-xs-12 roomFeatures mt-4">
							<span class="roomFeature klima">{{ trans('local.rooms.klima') }}</span>
							<span class="roomFeature sac">{{ trans('local.rooms.sac') }}</span>
							<span class="roomFeature banyo">{{ trans('local.rooms.banyo') }}</span>
							<span class="roomFeature minibar">{{ trans('local.rooms.minibar') }}</span>
							<span class="roomFeature telefon">{{ trans('local.rooms.telefon') }}</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>

@endsection
