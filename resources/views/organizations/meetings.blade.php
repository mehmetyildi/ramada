@extends('layouts.app')

@section('content')
<!-- MEETING -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.organizations.title') }}</h2>
					<a href="{{ route('organizations') }}" class="sidebarLink">{{ trans('local.overview') }}</a>
					<br>
					<a href="" class="sidebarLink selected">{{ trans('local.organizations.meetings.title') }}</a>
					<br>
					<a href="{{ route('organizations.weddings') }}" class="sidebarLink">{{ trans('local.organizations.weddings.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<h1>{{ trans('local.organizations.meetings.subtitle') }}</h1>
					<p class="restaurantInfo">
						{!! trans('local.organizations.meetings.description') !!}
					</p>
					<a href="{{ asset('/img/toplanti_chart_'.$l.'.png') }}" class="galleryImageLink" data-gallery="gallery-size"><img src="{{ asset('/img/toplanti_chart_'.$l.'.png') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.meetings.subtitle') }}" title="{{ trans('local.organizations.meetings.subtitle') }}"></a>
					<div class="row galleryOf">
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/meetings/28.jpg') }}" class="galleryImageLink" data-gallery="gallery-photos" title="{{ trans('local.organizations.meetings.subtitle') }}">
								<img src="{{ asset('/img/gallery/meetings/28.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.meetings.subtitle') }}" title="{{ trans('local.organizations.meetings.subtitle') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/meetings/29.jpg') }}" class="galleryImageLink" data-gallery="gallery-photos" title="{{ trans('local.organizations.meetings.subtitle') }}">
								<img src="{{ asset('/img/gallery/meetings/29.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.meetings.subtitle') }}" title="{{ trans('local.organizations.meetings.subtitle') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/meetings/30.jpg') }}" class="galleryImageLink" data-gallery="gallery-photos" title="{{ trans('local.organizations.meetings.subtitle') }}">
								<img src="{{ asset('/img/gallery/meetings/30.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.meetings.subtitle') }}" title="{{ trans('local.organizations.meetings.subtitle') }}">
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
