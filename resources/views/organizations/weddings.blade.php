@extends('layouts.app')

@section('content')
<!-- WEDDING -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.organizations.title') }}</h2>
					<a href="{{ route('organizations') }}" class="sidebarLink">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('organizations.meetings') }}" class="sidebarLink">{{ trans('local.organizations.meetings.title') }}</a>
					<br>
					<a href="" class="sidebarLink selected">{{ trans('local.organizations.weddings.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<h1>{{ trans('local.organizations.weddings.title') }}</h1>
					<p class="restaurantInfo">
						{!! trans('local.organizations.weddings.description') !!}
					</p>
					<div class="row galleryOf">
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/wedding/1.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.organizations.weddings.title') }}">
								<img src="{{ asset('/img/gallery/wedding/1.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.weddings.title') }}" title="{{ trans('local.organizations.weddings.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/wedding/2.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.organizations.weddings.title') }}">
								<img src="{{ asset('/img/gallery/wedding/2.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.weddings.title') }}" title="{{ trans('local.organizations.weddings.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/wedding/3.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.organizations.weddings.title') }}">
								<img src="{{ asset('/img/gallery/wedding/3.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.weddings.title') }}" title="{{ trans('local.organizations.weddings.title') }}">
								<span class="galleryLinkCaption"><div><i class="fa fa-search"></i> {{ trans('local.enlarge') }}</div></span>
							</a>
						</div>
						<div class="col-md-4 col-xs-12 mb-4">
							<a href="{{ asset('/img/gallery/wedding/4.jpg') }}" class="galleryImageLink" data-gallery title="{{ trans('local.organizations.weddings.title') }}">
								<img src="{{ asset('/img/gallery/wedding/4.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.organizations.weddings.title') }}" title="{{ trans('local.organizations.weddings.title') }}">
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
