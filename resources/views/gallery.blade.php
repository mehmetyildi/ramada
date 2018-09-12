@extends('layouts.app')

@section('content')
<!-- PHOTO GALLERY -->

<div class="container-fluid containerTopGradient">
	<div class="mainContainer clearfix">
		<div class="row">
			<div class="col-md-12 sectionHeading">
				<h1 class="sectionTitle">Fotoğraf</h1>
				<div class="controls">
				    <button type="button" data-filter=".all">{{ trans('local.gallery.all') }}</button>
				    <button type="button" data-filter=".property">{{ trans('local.gallery.property') }}</button>
				    <button type="button" data-filter=".rooms">{{ trans('local.gallery.room') }}</button>
				    <button type="button" data-filter=".meeting">{{ trans('local.gallery.meeting') }}</button>
				    <button type="button" data-filter=".organizations">{{ trans('local.gallery.organization') }}</button>
				    <button type="button" data-filter=".restaurant">{{ trans('local.gallery.restaurant') }}</button>
				    <button type="button" data-filter=".spa">{{ trans('local.gallery.spa') }}</button>
				</div>
			</div>
		</div>
		<div class="row mixitContainer">
			<?php $property = ['1', '2', '3' , '4'] ?>
			<?php $rooms = ['5', '6', '7' , '8' , '9', '10',  '11', '31', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45'] ?>
			<?php $meeting = ['28', '29', '30'] ?>
			<?php $organizations = ['26', '27',] ?>
			<?php $restaurant = ['21', '22', '23', '24', '25',  '32' ] ?>
			<?php $spa = ['12', '13', '14', '15','16', '17',  '18', '19', '20'] ?>
			<?php for ($i=0; $i < count($property); $i++) { ?>
				<div class="col-md-3 col-xs-12 mix all property mt-4">
				    <a data-gallery class="galleryImageLink" href="{{ asset('/img/gallery/property/'.$property[$i].'.jpg') }}" title="{{ trans('local.gallery.property') }}">
				    	<img class="img-fluid" src="{{ asset('/img/gallery/property/'.$property[$i].'.jpg') }}" alt="{{ trans('local.gallery.property') }}" title="{{ trans('local.gallery.property') }}">
				    	<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
				    </a>
				</div>
			<?php } ?>
			<?php for ($i=0; $i < count($rooms); $i++) { ?>
				<div class="col-md-3 col-xs-12 mix all rooms mt-4">
				    <a data-gallery class="galleryImageLink" href="{{ asset('/img/gallery/rooms/'.$rooms[$i].'.jpg') }}" title="{{ trans('local.gallery.room') }}">
				    	<img class="img-fluid" src="{{ asset('/img/gallery/rooms/'.$rooms[$i].'.jpg') }}" alt="{{ trans('local.gallery.room') }}" title="{{ trans('local.gallery.room') }}">
				    	<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
				    </a>
				</div>
			<?php } ?>
			<?php for ($i=0; $i < count($meeting); $i++) { ?>
				<div class="col-md-3 col-xs-12 mix all meeting mt-4">
				    <a data-gallery class="galleryImageLink" href="{{ asset('/img/gallery/meetings/'.$meeting[$i].'.jpg') }}" title="{{ trans('local.gallery.meeting') }}">
				    	<img class="img-fluid" src="{{ asset('/img/gallery/meetings/'.$meeting[$i].'.jpg') }}" alt="{{ trans('local.gallery.meeting') }}" title="{{ trans('local.gallery.meeting') }}">
				    	<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
				    </a>
				</div>
			<?php } ?>
			<?php for ($i=0; $i < count($organizations); $i++) { ?>
				<div class="col-md-3 col-xs-12 mix all organizations mt-4">
				    <a data-gallery class="galleryImageLink" href="{{ asset('/img/gallery/organizations/'.$organizations[$i].'.jpg') }}" title="{{ trans('local.gallery.organization') }}">
				    	<img class="img-fluid" src="{{ asset('/img/gallery/organizations/'.$organizations[$i].'.jpg') }}" alt="{{ trans('local.gallery.organization') }}" title="{{ trans('local.gallery.organization') }}">
				    	<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
				    </a>
				</div>
			<?php } ?>
			<?php for ($i=0; $i < count($restaurant); $i++) { ?>
				<div class="col-md-3 col-xs-12 mix all restaurant mt-4">
				    <a data-gallery class="galleryImageLink" href="{{ asset('/img/gallery/restaurant/'.$restaurant[$i].'.jpg') }}" title="{{ trans('local.gallery.restaurant') }}">
				    	<img class="img-fluid" src="{{ asset('/img/gallery/restaurant/'.$restaurant[$i].'.jpg') }}" alt="{{ trans('local.gallery.restaurant') }}" title="{{ trans('local.gallery.restaurant') }}">
				    	<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
				    </a>
				</div>
			<?php } ?>
			<?php for ($i=0; $i < count($spa); $i++) { ?>
				<div class="col-md-3 col-xs-12 mix all spa mt-4">
				    <a data-gallery class="galleryImageLink" href="{{ asset('/img/gallery/spa/'.$spa[$i].'.jpg') }}" title="{{ trans('local.gallery.spa') }}">
				    	<img class="img-fluid" src="{{ asset('/img/gallery/spa/'.$spa[$i].'.jpg') }}" alt="{{ trans('local.gallery.spa') }}" title="{{ trans('local.gallery.spa') }}">
				    	<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
				    </a>
				</div>
			<?php } ?>
			
		</div>
	</div>
	@include('includes._all-rows')
</div>

@endsection

@section('scripts')
	<script>
		var mixer = mixitup('.mixitContainer');
	</script>
@endsection
