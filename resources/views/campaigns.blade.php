@extends('layouts.app')

@section('content')
<!-- CAMPAIGNS -->
<div class="container-fluid containerTopGradient">
	<div class="mainContainer clearfix">
		<div class="row">
			<div class="col-md-12 sectionHeading">
				<h1 class="sectionTitle">{{ trans('local.nav.campaigns') }}</h1>
			</div>
		</div>
		<div class="row">

			@foreach($campaigns as $campaign)
			<div class="col-md-12 mb-4">
				<div class="grayBg noPaddingTopBottom clearfix">
					<div class="row">
						@if($campaign->{'main_image_'.$l})
						@if($campaign->position%2==1)
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('storage/'.$campaign->{'main_image_'.$l}) }}" class="fullWidth img-fluid" alt="{{ $campaign->{'title_'.$l} }}" title="{{ $campaign->{'title_'.$l} }}">
						</div>
						<div class="col-md-6 col-xs-12">
							<div class="campaignInfo campaignPaddingRight clearfix">
								<h3>{{ $campaign->{'title_'.$l} }}</h3>
								{!! $campaign->{'description_'.$l} !!}
								<br><br>
								<a class="reservationLine" href="https://www.wyndhamhotels.com/tr-tr/ramada/istanbul-turkey/ramada-plaza-istanbul-tekstilkent/rooms-rates?partner_id=&hotel_id=45789&campaign_code=&propId=RA45789&checkout_date=12%2F07%2F2015&brand_id=RA&children=0&corporate_id=&ratePlan=BAR&teens=0&affiliate_id=&iata=&rate_code=&adults=2&checkin_date=11%2F07%2F2015&rooms=1" target="_blank">{{ trans('local.bookNow') }}</a>
								<br><br>
							</div>
						</div>
						<div class="col-md-12"><br></div>
						@elseif($campaign->position%2==0)
						<div class="col-md-6 col-xs-12">
							<div class="campaignInfo campaignPaddingLeft clearfix">
								<h3>{{ $campaign->{'title_'.$l} }}</h3>
								{!! $campaign->{'description_'.$l} !!}
								<a class="reservationLine" href="https://www.wyndhamhotels.com/tr-tr/ramada/istanbul-turkey/ramada-plaza-istanbul-tekstilkent/rooms-rates?partner_id=&hotel_id=45789&campaign_code=&propId=RA45789&checkout_date=12%2F07%2F2015&brand_id=RA&children=0&corporate_id=&ratePlan=BAR&teens=0&affiliate_id=&iata=&rate_code=&adults=2&checkin_date=11%2F07%2F2015&rooms=1" target="_blank">{{ trans('local.bookNow') }}</a>
								<br><br>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<img src="{{ asset('storage/'.$campaign->{'main_image_'.$l}) }}" class="fullWidth img-fluid" alt="{{ $campaign->{'title_'.$l} }}" title="{{ $campaign->{'title_'.$l} }}">
						</div>
						@endif
						@endif


					</div>
				</div>
			</div>
			<div class="col-md-12"><br></div>
			@endforeach



			




			
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
