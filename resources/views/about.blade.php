@extends('layouts.app')

@section('content')
<!-- ABOUT -->

<div class="container-fluid containerTopGradient">
	<div class="mainContainer noPaddingTop clearfix">
		<div class="row">
			<div class="col-md-12">
				<div class="aboutPhoto clearfix relative">
					<img src="{{ asset('/img/about-ramada.jpg') }}" class="img-fluid fullWidth" alt="{{ trans('local.nav.about') }}" title="{{ trans('local.nav.about') }}">
					<span class="aboutSayHello">Say Hello To</span>
				</div>
				<div class="ramadaItalicPhoto containerTopGradient">
					<img src="{{ asset('/img/ramada-italic.png') }}" class="img-fluid centeredImage ramadaItalic" alt="Ramada Plaza Tekstilkent" title="Ramada Plaza Tekstilkent">
				</div>
				<p class="spaText">
					{!! trans('local.about.description') !!}
				</p>
			</div>
		</div>
	</div>
	@include('includes._all-rows')
</div>
@endsection
