@extends('layouts.app')

@section('content')
<!-- ORGANIZATIONS -->
<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<h2>{{ trans('local.organizations.title') }}</h2>
					<a href="" class="sidebarLink selected">{{ trans('local.overview') }}</a>
					<br>
					<a href="{{ route('organizations.meetings') }}" class="sidebarLink">{{ trans('local.organizations.meetings.title') }}</a>
					<br>
					<a href="o{{ route('organizations.weddings') }}" class="sidebarLink">{{ trans('local.organizations.weddings.title') }}</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="roomCarouselRow row">
						<div class="col-md-12">
							<img src="{{ asset('/img/say-hello-to-business-black.png') }}" class="img-fluid comfortImage" alt="Say Hello To Business" title="Say Hello To Business">
						</div>
					</div>
					<p class="restaurantInfo">
						{!! trans('local.organizations.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
