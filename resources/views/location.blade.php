@extends('layouts.app')

@section('content')
<!-- LOCATION -->

<div class="relative">
	<div id="googlemaps" class="relative"></div>
	<img src="{{ asset('/img/say-hello-to-maps2.jpg') }}" class="sliderSayHello" alt="Say Hello To İstanbul">
</div>

<div class="container-fluid containerTopGradient">
	<div class="row">
		<div class="col-md-12 ">
			<div class="pageWithSideBar row clearfix">
				<div class="col-md-4 col-xs-12">
					<a href="#" data-lat="41.069513" data-long="28.867801" class="sidebarLink zoomIn selected"><img src="{{ asset('/img/ramada-pin.png') }}" width="30" alt=""> Ramada Plaza İstanbul Tekstilkent</a>
					<br>
					<h2>{{ trans('local.location.attractions') }}</h2>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="0"><span class="circled">A</span> Mall Of İstanbul</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="1"><span class="circled">B</span> İstanbul Sea Life Akvaryum</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="2"><span class="circled">C</span> İstanbul Atatürk Airport</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="3"><span class="circled">D</span> CNR Expo</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="4"><span class="circled">E</span> Tüyap</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="5"><span class="circled">F</span> Haliç Kongre Merkezi</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="6"><span class="circled">G</span> Taksim Square</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="7"><span class="circled">H</span> İstoç</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="8"><span class="circled">I</span> Pierre Loti Coffee House</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="9"><span class="circled">J</span> Eyüp Sultan Mosque</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="10"><span class="circled">K</span> Forum İstanbul</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="11"><span class="circled">L</span> Vialand</a>
					<br>
					<a href="javascript:" class="sidebarLink" data-target="#ramadaCarousel" data-slide-to="12"><span class="circled">M</span> Sultanahmet</a>
				</div>
				<div class="col-md-8 col-xs-12">
					<div id="ramadaCarousel" class="carousel slide relative" data-ride="carousel">
					  	<div class="carousel-inner">
					    	<div class="carousel-item mapCarousel active">
					      		<h2 class="tide red-font locationName">Mall Of Istanbul</h2>
					      		<p>Mahmutbey, Süleyman Demirel Bulvarı, 34306 <br> Başakşehir/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.0627869" data-long="28.8075604"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Istanbul Sea Life Akvaryum</h2>
					      		<p>Kocatepe Mah., Paşa Cd 5/5, 34045 <br> Bayrampaşa/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.045442" data-long="28.895992"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Istanbul Ataturk Airport</h2>
					      		<p>Yeşilköy, 34149 Bakırköy/Istanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.0266693" data-long="28.7872094"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">CNR Expo</h2>
					      		<p>Yeşilköy Mahallesi, Cnr Ekspo Fuar Merkezi, 34149 <br> Bakırköy/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="40.987209" data-long="28.825158"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Tuyap</h2>
					      		<p>Cumhuriyet Mahallesi, Cumhuriyet Mah., <br>Eski Hadımköy Yolu Caddesi 9/1, 34500 <br> Büyükçekmece/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.024859" data-long="28.623943"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Halic Kongre Merkezi</h2>
					      		<p>Sütlüce Mahallesi 34445 <br> Beyoğlu/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.048768" data-long="28.941106"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Taksim Square</h2>
					      		<p>Gümüşsuyu Mahallesi 34437 Beyoğlu/Istanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.037010" data-long="28.985137"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Istoc</h2>
					      		<p>İstasyon Mahallesi, 3. Sk. No:54, 34303 <br> Küçükçekmece/Bağcılar/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.0647795" data-long="28.826162"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Pierre Loti Coffee House</h2>
					      		<p>Merkez Mahallesi, İdris Köşkü Cd., 34050 <br> Eyüp/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.0648354" data-long="28.8637785"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Eyup Sultan Mosque</h2>
					      		<p>Merkez Mh., Camii Kebir Cd. No:1, 34050 <br> Eyüp/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.047964" data-long="28.933781"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Forum Istanbul</h2>
					      		<p>Kocatepe Mahallesi, Paşa Cd, 34045 <br> Bayrampaşa/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.0616781" data-long="28.8641998"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Vialand</h2>
					      		<p>Yeşilpınar Mahallesi, Şehit Metin Kaya Sk. No:11, 34065 <br> Eyüp/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.0715515" data-long="28.9211387"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<div class="carousel-item mapCarousel">
					      		<h2 class="tide red-font locationName">Sultanahmet</h2>
					      		<p>Sultan Ahmet Mahallesi, Atmeydanı Cd. 34122 <br> Fatih/İstanbul</p>
					      		<a href="#" class="zoomIn" data-lat="41.006837" data-long="28.976237"><i class="fa fa-map-marker"></i> {{ trans('local.location.showOnMap') }}</a>
					    	</div>
					    	<a class="carousel-control-prev mapControl" href="#ramadaCarousel" role="button" data-slide="prev">
							    <img src="{{ asset('/img/icons/left.png') }}" alt="">
							    <span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next mapControl" href="#ramadaCarousel" role="button" data-slide="next">
							    <img src="{{ asset('/img/icons/right.png') }}" alt="">
							    <span class="sr-only">Next</span>
						  	</a>
					  	</div>
					</div>
					<p class="aboutText">
						{!! trans('local.location.description') !!}
					</p>
				</div>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
@section('scripts')
	<script>
      var map; 
       
        function initMap() {
            var myLatLng = {lat: 41.069513, lng: 28.867801};

            var map = new google.maps.Map(document.getElementById('googlemaps'), {
              zoom: 11,
              scrollwheel: false,
              center: myLatLng
            });
            
            new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: 'Ramada Plaza Tekstilkent',
              icon: "{{ asset('/img/ramada-pin.png') }}"
            });

            new google.maps.Marker({
	          	position: {
	          		lat: 41.0627869, 
	          		lng: 28.8075604
	          	},
	          	map: map,
	          	title: 'Mall Of Istanbul',
	          	icon: "{{ asset('/img/pins/a.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.045442,
	          		lng: 28.895992
	          	},
	          	map: map,
	          	title: 'İstanbul SEA LIFE Akvaryum',
	          	icon: "{{ asset('/img/pins/b.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.0266693,
	          		lng: 28.7872094
	          	},
	          	map: map,
	          	title: 'İstanbul Atatürk Airport',
	          	icon: "{{ asset('/img/pins/c.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 40.987209,
	          		lng: 28.825158
	          	},
	          	map: map,
	          	title: 'CNR Expo',
	          	icon: "{{ asset('/img/pins/d.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.024859,
	          		lng: 28.623943
	          	},
	          	map: map,
	          	title: 'Tüyap',
	          	icon: "{{ asset('/img/pins/e.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.048768,
	          		lng: 28.941106
	          	},
	          	map: map,
	          	title: 'Haliç Kongre Merkezi',
	          	icon: "{{ asset('/img/pins/f.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.037010,
	          		lng: 28.985137
	          	},
	          	map: map,
	          	title: 'Taksim Square',
	          	icon: "{{ asset('/img/pins/g.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.0647795,
	          		lng: 28.826162
	          	},
	          	map: map,
	          	title: 'İstoç',
	          	icon: "{{ asset('/img/pins/h.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.0648354,
	          		lng: 28.8637785
	          	},
	          	map: map,
	          	title: 'Pierre Loti Coffee House',
	          	icon: "{{ asset('/img/pins/i.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.047964,
	          		lng: 28.933781
	          	},
	          	map: map,
	          	title: 'Eyüp Sultan Mosque',
	          	icon: "{{ asset('/img/pins/j.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.0616781,
	          		lng: 28.8641998
	          	},
	          	map: map,
	          	title: 'Forum İstanbul',
	          	icon: "{{ asset('/img/pins/k.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.0715515,
	          		lng: 28.9211387
	          	},
	          	map: map,
	          	title: 'VIALAND',
	          	icon: "{{ asset('/img/pins/l.png') }}"
	        });
	        new google.maps.Marker({
	          	position: {
	          		lat: 41.006837,
	          		lng: 28.976237
	          	},
	          	map: map,
	          	title: 'Sultanahmet',
	          	icon: "{{ asset('/img/pins/m.png') }}"
	        });

	        $(document).delegate('.zoomIn', 'click', function(){
		    	var newCenter = {
			            lat: $(this).data('lat'),
			            lng: $(this).data('long')
			        }
		    	map.setZoom(16);
		      	map.setCenter(newCenter);
		    });
          }
      
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDncyEm2ApXXZ0x8D8QNdqtj8S3j2Sn-4M&callback=initMap"
    type="text/javascript"></script>
@endsection
