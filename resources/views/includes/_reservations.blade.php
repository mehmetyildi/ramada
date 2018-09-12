<div class="col-md-2 hidden-xs">
	<br>
	<img src="{{ asset('/img/say-hello-to-red.png') }}" class="img-fluid sliderSayHelloRed" alt="Say Hello To Red" title="Say Hello To Red">
</div>
<div class="col-md-10 col-xs-12">
	<div class="row">
		<div class="col-md-2 form-group colNo col-xs-12">
			<label for="checkin">{{ trans('local.res.checkin') }}</label>
			<input type="text" name="checkin" id="checkin" readonly class="form-control" placeholder="{{ trans('local.res.checkinDate') }}">
		</div>
		<div class="col-md-2 form-group colNo col-xs-12">
			<label for="checkin">{{ trans('local.res.checkout') }}</label>
		    <input type="text" name="checkout" id="checkout" readonly class="form-control" placeholder="{{ trans('local.res.checkoutDate') }}">
		</div>
		<div class="col-md-1 form-group colNo col-xs-12">
			<label for="checkin">{{ trans('local.res.adult') }}</label>
			<input type="number" class="form-control" name="adults" id="adults" value="1">
		</div>
		<div class="col-md-1 form-group colNo col-xs-12">
			<label for="checkin">{{ trans('local.res.child') }}</label>
			<input type="number" class="form-control" name="children" id="children" value="0">
		</div>
		<div class="col-md-3 sliderCaptionBorderRight col-xs-12">
			<br>
	    	<a id="wyndhamRedirector" href="https://www.wyndhamhotels.com/ramada/istanbul-turkey/ramada-plaza-istanbul-tekstilkent/rooms-rates?brand_id=RA&checkin_date=10/17/2017&checkout_date=11/17/2017&useWRPoints=false&children=1&adults=2&rooms=1&radius=25&brand_code=BH,DI,RA,BU,HJ,KG,MT,SE,TL,WG,WY,WT,WP,VO,DX,TM,CE&PriceFilter=0-2147483647&" class="fullWidth" target="_blank">{{ trans('local.res.reserve') }}</a>
	    </div>
	    <div class="col-md-3 form-group centeredLabel col-xs-12">
	    	<label>{{ trans('local.res.freeline') }}</label>
	    	<a href="tel:+902124430303" class="reservationLine"><i class="fa fa-phone"></i> +90(212) 443 03 03</a>
	    </div>
	</div>
</div>