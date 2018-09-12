@extends('layouts.app')

@section('content')
<!-- HOMEPAGE -->
<div class="popup" style="display: none;">
	<div class="relative">
		<div class="mainContainer">
			<div class="thePopup" style="top:5%;">
				<div class="relative">
					<img src="{{ asset('/img/popups/ramazan.jpg') }}" class="img-responsive centeredImage" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
					<a class="closePopup" style="right:13%; margin-right: 0;"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- SLIDER -->
<div id="ramadaCarousel" class="carousel slide relative" data-ride="carousel">
  	<ol class="carousel-indicators">
    	<li data-target="#ramadaCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#ramadaCarousel" data-slide-to="1"></li>
    	<li data-target="#ramadaCarousel" data-slide-to="2"></li>
    	<li data-target="#ramadaCarousel" data-slide-to="3"></li>
    	<li data-target="#ramadaCarousel" data-slide-to="4"></li>
    	<li data-target="#ramadaCarousel" data-slide-to="5"></li>
    	<li data-target="#ramadaCarousel" data-slide-to="6"></li>
  	</ol>
  	<div class="carousel-inner">
  		<div class="carousel-item active">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/1.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/2_'.$l.'.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/3_'.$l.'.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/4_'.$l.'.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/5_'.$l.'.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/6_'.$l.'.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
    	<div class="carousel-item">
      		<img class="d-block w-100 fullWidth" src="{{ asset('/img/slider/new/7_'.$l.'.jpg') }}" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
    	</div>
  	</div>
  	<div class="reservationsRow reservationsAbsolute row">
		<div class="col-md-2 hidden-sm hidden-xs">
			<br>
			<img src="{{ asset('/img/say-hello-to-red.png') }}" class="img-fluid sliderSayHelloRed" alt="Say Hello To Red">
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12">
			<div class="row">
				<div class="col-md-2 form-group colNo  col-xs-12">
					<label for="checkin">{{ trans('local.res.checkin') }}</label>
					<input type="text" name="checkin" id="checkin" readonly class="form-control" placeholder="{{ trans('local.res.checkinDate') }}">
				</div>
				<div class="col-md-2 form-group colNo  col-xs-12">
					<label for="checkin">{{ trans('local.res.checkout') }}</label>
				    <input type="text" name="checkout" id="checkout" readonly class="form-control" placeholder="{{ trans('local.res.checkoutDate') }}">
				</div>
				<div class="col-md-1 form-group colNo  col-xs-12">
					<label for="checkin">{{ trans('local.res.adult') }}</label>
					<input type="number" class="form-control" name="adults" id="adults" value="1">
				</div>
				<div class="col-md-1 form-group colNo  col-xs-12">
					<label for="checkin">{{ trans('local.res.child') }}</label>
					<input type="number" class="form-control" name="children" id="children" value="0">
				</div>
				<div class="col-md-3 sliderCaptionBorderRight  col-xs-12">
					<br>
			    	<a id="wyndhamRedirector" href="https://www.wyndhamhotels.com/ramada/istanbul-turkey/ramada-plaza-istanbul-tekstilkent/rooms-rates?brand_id=RA&checkin_date=10/17/2017&checkout_date=11/17/2017&useWRPoints=false&children=1&adults=2&rooms=1&radius=25&brand_code=BH,DI,RA,BU,HJ,KG,MT,SE,TL,WG,WY,WT,WP,VO,DX,TM,CE&PriceFilter=0-2147483647&" class="fullWidth" target="_blank">{{ trans('local.res.reserve') }}</a>
			    </div>
			    <div class="col-md-3 form-group centeredLabel  col-xs-12">
			    	<label>{{ trans('local.res.freeline') }}</label>
			    	<a href="tel:+902124430303" class="reservationLine"><i class="fa fa-phone"></i> +90(212) 443 03 03</a>
			    </div>
			</div>
		</div>
	</div>
</div>
<!-- END SLIDER -->

<div class="container-fluid containerTopGradient">
	<div class="mainContainer clearfix">
		<h1>{{ trans('local.home.title') }}</h1>
		<p>
			{!! trans('local.home.message') !!}
		</p>
		<br><br>
		@include('includes._follow-us')
		<hr>
		@include('includes._quick-info')
		<hr>
		@include('includes._discover')
		<hr>
	</div>
	<div class="grayBg row">
		<div class="contentCarousel relative clearfix">
			<div id="ramadaContentCarousel" class="carousel slide relative" data-ride="carousel">
			  	<div class="carousel-inner">
			  		<div class="carousel-item active">
			      		<div class=" clearfix row">
			      			<div class="col-md-6 col-xs-12">
								<a href="{{ route('campaigns') }}" class="homeFeaturette">
									<img src="{{ asset('/img/home-campaigns.jpg') }}" class="img-fluid" alt="{{ trans('local.nav.campaigns') }}" title="{{ trans('local.nav.campaigns') }}">
									<span class="homeFeaturetteCaption">{{ trans('local.nav.campaigns') }}</span>
									<div class="featuretteHover">
										<img src="{{ asset('/img/say-hello-to-promotions.png') }}" class="img-fluid" alt="{{ trans('local.nav.campaigns') }}" title="{{ trans('local.nav.campaigns') }}">
									</div>
								</a>
							</div>
							<div class="col-md-6 col-xs-12">
								<a href="{{ route('news') }}" class="homeFeaturette">
									<img src="{{ asset('/img/home-meetings.jpg') }}" class="img-fluid" alt="{{ trans('local.nav.meetings') }}" title="{{ trans('local.nav.meetings') }}">
									<span class="homeFeaturetteCaption">{{ trans('local.nav.meetings') }}</span>
									<div class="featuretteHover">
										<img src="{{ asset('/img/say-hello-to-business.png') }}" class="img-fluid" alt="{{ trans('local.nav.meetings') }}" title="{{ trans('local.nav.meetings') }}">
									</div>
								</a>
							</div>
						</div>
			    	</div>
			    	<div class="carousel-item">
			      		<div class=" clearfix row">
							<div class="col-md-6 col-xs-12 relative">
								<a href="{{ route('rooms') }}" class="homeFeaturette">
									<img src="{{ asset('/img/home-rooms.jpg') }}" class="img-fluid" alt="{{ trans('local.nav.rooms') }}" title="{{ trans('local.nav.rooms') }}">
									<span class="homeFeaturetteCaption">{{ trans('local.nav.rooms') }}</span>
									<div class="featuretteHover">
										<img src="{{ asset('/img/say-hello-to-comfort-red.png') }}" class="img-fluid" alt="{{ trans('local.nav.rooms') }}" title="{{ trans('local.nav.rooms') }}">
									</div>
								</a>
							</div>
							<div class="col-md-6 col-xs-12">
								<a href="{{ route('campaigns') }}" class="homeFeaturette">
									<img src="{{ asset('/img/home-campaigns.jpg') }}" class="img-fluid" alt="{{ trans('local.nav.campaigns') }}" title="{{ trans('local.nav.campaigns') }}">
									<span class="homeFeaturetteCaption">{{ trans('local.nav.campaigns') }}</span>
									<div class="featuretteHover">
										<img src="{{ asset('/img/say-hello-to-promotions.png') }}" class="img-fluid" alt="{{ trans('local.nav.campaigns') }}" title="{{ trans('local.nav.campaigns') }}">
									</div>
								</a>
							</div>
						</div>
			    	</div>
			    	<div class="carousel-item">
			      		<div class=" clearfix row">
							<div class="col-md-6 col-xs-12">
								<a href="{{ route('news') }}" class="homeFeaturette">
									<img src="{{ asset('/img/home-meetings.jpg') }}" class="img-fluid" alt="{{ trans('local.nav.meetings') }}" title="{{ trans('local.nav.meetings') }}">
									<span class="homeFeaturetteCaption">{{ trans('local.nav.meetings') }}</span>
									<div class="featuretteHover">
										<img src="{{ asset('/img/say-hello-to-business.png') }}" class="img-fluid" alt="{{ trans('local.nav.meetings') }}" title="{{ trans('local.nav.meetings') }}">
									</div>
								</a>
							</div>
							<div class="col-md-6 col-xs-12 relative">
								<a href="{{ route('rooms') }}" class="homeFeaturette">
									<img src="{{ asset('/img/home-rooms.jpg') }}" class="img-fluid" alt="{{ trans('local.nav.rooms') }}" title="{{ trans('local.nav.rooms') }}">
									<span class="homeFeaturetteCaption">{{ trans('local.nav.rooms') }}</span>
									<div class="featuretteHover">
										<img src="{{ asset('/img/say-hello-to-comfort-red.png') }}" class="img-fluid" alt="{{ trans('local.nav.rooms') }}" title="{{ trans('local.nav.rooms') }}">
									</div>
								</a>
							</div>
						</div>
			    	</div>
			    	
			  	</div>
			</div>
	    	<a class="carousel-control-prev" href="#ramadaContentCarousel" role="button" data-slide="prev">
			    <i class="fa fa-chevron-left"></i>
			    <span class="sr-only">Previous</span>
		  	</a>
		  	<a class="carousel-control-next" href="#ramadaContentCarousel" role="button" data-slide="next">
			    <i class="fa fa-chevron-right"></i>
			    <span class="sr-only">Next</span>
		  	</a>
		</div>
	</div>
	<div class="containerTopGradient row">
		<div class="mainContainer clearfix">
			<div class="row discoverRow">
				<div class="col-md-2"></div>
				<div class="col-md-8 col-xs-12">
					<div class="embed-responsive embed-responsive-16by9">
					  	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2DOpa7VhlPM" allowfullscreen></iframe>
					</div>
				</div>
				<!-- <div class="col-md-6 col-xs-12 bulletinBorderLeft">
					{!! trans('local.bulletin.message') !!}
					<form action="" class="row bulletinForm">
						<div class="col-md-8 form-group col-xs-12">
							<input type="email" name="email" id="email" class="form-control" placeholder="{{ trans('local.bulletin.email') }}">
						</div>
						<div class="col-md-4 form-group col-xs-12 colNo">
							<input type="submit" class="bulletinSubmit" value="{{ trans('local.bulletin.subscribe') }}">
						</div>
					</form>
				</div> -->
			</div>
		</div>
	</div>
</div>
    @if($thePopup)
        <!-- Modal -->
        <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <br>
                    </div>
                    <div class="modal-body">
                        @if($thePopup->video_path)
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $thePopup->video_path }}"></iframe>
                            </div>
                        @else
                            <a href="{{ $thePopup->link }}" target="_blank"><img class="img-responsive fullWidth" src="{{ url('storage/'.$thePopup->{'image_path_'.$l}) }}" alt="Uzer Makina" title="Uzer Makina"></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('/js/popup.js') }}"></script>
  @if($thePopup)
        <script>
            jQuery(document).ready(function(){
                jQuery('#popupModal').modal('show');
                setTimeout(function(){jQuery('#popupModal').modal('hide');}, {{ $thePopup->duration }} * 1000);
            });

        </script>
    @endif
@endsection
