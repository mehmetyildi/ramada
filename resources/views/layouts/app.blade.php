<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon" />
    <title>Ramada Plaza Tekstilkent</title>
    <meta name="description" content="{{ trans('local.seo.description') }}">
    <meta property="og:title" content="Ramada Plaza Tekstilkent" />
    <meta property="og:description" content="{{ trans('local.seo.description') }}" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta name="author" content="{{ route('home') }}">
    <meta name="canonical" content="{{ route('home') }}">
    @yield('seo')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://use.fontawesome.com/46d6f17686.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500|Montserrat:300,400,700&amp;subset=latin-ext" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-datepicker.standalone.min.css') }}" />
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/sweetalert.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/popup.css') }}" />
    @yield('styles')
</head>

<body>
    <!--[if lt IE 9]><script src="assets/js/lib/html5shiv.js"></script><![endif]-->
<div class="container" id="app">
	<div class="borderContainer clearfix">
		<!-- BEGIN HEADER -->
		<header>
			<div class="logoArea"> 
				<img src="{{ asset('/img/ramada.png') }}" width="250" class="centeredImage">
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		  		</button>
			  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="navbar-nav mr-auto">
			    		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('home') }}">{{ trans('local.nav.home') }}</a>
			      		</li>
			      		<!-- <li class="nav-item">
			        		<a class="nav-link" href="{{ route('about') }}">Otel Hakkında</a>
			      		</li> -->
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('rooms') }}">{{ trans('local.nav.rooms') }}</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('restaurants') }}">{{ trans('local.nav.restaurants') }}</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('organizations') }}">{{ trans('local.nav.meetings') }}</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('campaigns') }}">{{ trans('local.nav.campaigns') }}</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('health') }}">{{ trans('local.nav.spa') }}</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('location') }}">{{ trans('local.nav.location') }}</a>
			      		</li>
			      		<li class="nav-item">
			        		<a class="nav-link" href="{{ route('gallery') }}">{{ trans('local.nav.gallery') }}</a>
			      		</li>
			      		
		    		</ul>
		    		<ul class="navbar-nav navbar-right">
		    			<li class="nav-item">
			        		<a class="nav-link" href="tel:+902124430303">{{ trans('local.nav.contact') }} <img src="{{ asset('/img/icons/phone-red.png') }}" alt=""></a>
			      		</li>
			      		@if(app()->getLocale() == 'tr')
			      		<li class="nav-item">
			        		<a class="nav-link languageLink
			        		" href="{{ url('/en') }}">EN</a>
			      		</li>
			      		@else
			      		<li class="nav-item">
			        		<a class="nav-link languageLink
			        		" href="{{ url('/tr') }}">TR</a>
			      		</li>
			      		@endif
		      			<!-- <form class="form-inline my-2 my-lg-0 relative">
					      	<input class="form-control mr-sm-1 searchInput" type="text" placeholder="{{ trans('local.nav.search') }}" aria-label="{{ trans('local.nav.search') }}" autocomplete="off">
					      	<button class="searchSubmit" type="submit"><i class="fa fa-search"></i></button>
					    </form> -->
		    		</ul>
			  	</div>
			</nav>
		</header>
		<!-- END HEADER -->
		<!-- BEGIN MAIN CONTENT -->
		<main>
			@yield('content')
		</main>
	</div>
	


	<div class="wyndhamContainer">
		<img src="{{ asset('/img/wyndham.png') }}" class="centeredImage" alt="">
		<div class="footerLinks">
			<a href="">{{ trans('local.nav.privacy') }}</a>
			<a href="">{{ trans('local.nav.terms') }}</a>
			<!-- <a href="{{ route('news') }}">{{ trans('local.nav.news') }}</a> -->
		</div>
		<div class="copyright">&copy; Copyright 2017 Ramada Plaza Tekstilkent İstanbul. {{ trans('local.nav.copyright') }}</div>
	</div>
	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
	    <!-- The container for the modal slides -->
	    <div class="slides"></div>
	    <!-- Controls for the borderless lightbox -->
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	    <!-- The modal dialog, which will be used to wrap the lightbox content -->
	    <div class="modal fade">
	        <div class="modal-dialog">
	            <div class="modal-content">
	                <div class="modal-header">
	                    <button type="button" class="close" aria-hidden="true">&times;</button>
	                    <h4 class="modal-title"></h4>
	                </div>
	                <div class="modal-body next"></div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default pull-left prev">
	                        <i class="glyphicon glyphicon-chevron-left"></i>
	                        Previous
	                    </button>
	                    <button type="button" class="btn btn-primary next">
	                        Next
	                        <i class="glyphicon glyphicon-chevron-right"></i>
	                    </button>
	                </div>
	            </div>
	        </div>
	    </div>
	</div> 
	<footer>
		<img src="{{ asset('/img/ilbaklogo.png') }}" class="centeredImage" alt="">
		<br>
		Oruç Reis Mah. Tekstilciler Cad. No: 3 <br> Esenler İstanbul, 34235, Turkey
		<br>
		<a href="tel:+902124430303">+90 212 443 03 03</a> | <a href="mailto:info@ramadaplazatekstilkent.com">info@ramadaplazatekstilkent.com</a>
		<br><br>
		www.ramadaplazatekstilkent.com
	</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/js/date.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap-datepicker.tr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery-dateFormat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
<script type="text/javascript" src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/mixitup.min.js') }}"></script>
@yield('scripts')
<script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
        	sweetAlert("Thank You", "Your message is sent. We'll contact you back shortly.", "success");
        @endif
    </script>
</body>
</html>
