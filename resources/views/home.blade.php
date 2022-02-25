@extends('layout')
@section('content')
<section class="home home-1">
	<img src="{{ url('images') }}/banner-top.jpg" alt="" class="img-fluid w-100">
</section>
<section class="home home-2">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-6">
				<h3 class="green">Employer</h3>
				<h2 class="blue text-center">{{ $home->home_1_title }}</h2>
				{!! $home->home_1_text !!}
			</div>
			<div class="col-md-4">
				<img src="{{ url('images') }}/{{ $home->home_1_img }}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="home home-3">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-7">
				<h2 class="green-2">{{ $home->home_2_title }}</h2>
	            {!! $home->home_2_text !!}
			</div>
			<div class="col-md-3">
				<img src="{{ url('images') }}/{{ $home->home_1_img }}" alt="" class="img-fluid">                          
			</div>
		</div>
	</div>
</section>
<section class="home home-4">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<h2 class="text-center blue">{{ $home->home_3_title }}</h2>
			</div>
			<div class="col-md-4">
				<img src="{{ url('images') }}/{{ $home->home_3_img }}" alt="" class="img-fluid">
			</div>
			<div class="col-md-8">
				{!! $home->home_3_text !!}
			</div>
		</div>
	</div>
</section>
<section class="home home-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="glide_home">
				  @if($home->slider_home_1_active === "active")
					  <div class="glide__track" data-glide-el="track">
					    <ul class="glide__slides">
					      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_1_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_1_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
					      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_2_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_2_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
					      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_3_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_3_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
					    </ul>
					  </div>
					  <div class="glide__bullets" data-glide-el="controls[nav]">
					    <button class="glide__bullet" data-glide-dir="=0"></button>
					    <button class="glide__bullet" data-glide-dir="=1"></button>
					    <button class="glide__bullet" data-glide-dir="=2"></button>
					  </div>
				  @endif
				</div>                    
			</div>
		</div>
	</div>
</section>
<section class="home home-6">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="green">Talent</h3>
				<h3 class="gray">{{ $home->home_5_title }}</h3>
				{!! $home->home_5_text !!}
			</div>
		</div>
	</div>
</section>
<section class="home home-7">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-7">
				<h2 class="green-2">{{ $home->home_4_title }}</h2>
				{!! $home->home_4_text !!}                     
			</div>
			<div class="col-md-4">
				<img src="{{ url('images') }}/{{ $home->home_4_img }}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="home home-8">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="glide_home_2">
				  @if($home->slider_home_2_active === "active")
					  <div class="glide__track" data-glide-el="track">
					    <ul class="glide__slides">
					      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_4_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_4_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
					      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_5_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_5_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
					      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_6_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_6_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
					    </ul>
					  </div>
					  <div class="glide__bullets" data-glide-el="controls[nav]">
					    <button class="glide__bullet" data-glide-dir="=0"></button>
					    <button class="glide__bullet" data-glide-dir="=1"></button>
					    <button class="glide__bullet" data-glide-dir="=2"></button>
					  </div>
				  @endif
				</div>                    
			</div>
		</div>
	</div>
</section>
@if($home->counter_active === "active")
	<section class="home home-9">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p><span>{{ $home->counter_number_1 }}</span><b>{{ $home->counter_text_1 }}</b></p>
				</div>
				<div class="col-md-4">
					<p><span>{{ $home->counter_number_2 }}</span><b>{{ $home->counter_text_2 }}</b></p>
				</div>
				<div class="col-md-4">
					<p><span>{{ $home->counter_number_3 }}</span><b>{{ $home->counter_text_3 }}</b></p>
				</div>
			</div>
		</div>
	</section>
	<div class="home home-12">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					{!! $home->counter_description !!}
				</div>
			</div>
		</div>
	</div>
@endif
<section class="home home-10">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h2>Opinions Experience</h2>
			</div>
			<div class="col-md-12">
				<div class="glide_home_3">
					@if($home->slider_home_3_active === "active")
						<div class="glide__track" data-glide-el="track">
						    <ul class="glide__slides">
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_7_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_7_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_8_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_8_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $home->slider_home_9_video }}"><img src="{{ url('images') }}/{{ $home->slider_home_9_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						    </ul>
					  	</div>
					@endif
				</div>   
			</div>
		</div>
	</div>
</section>
<section class="home home-11">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 text-center">
				<h2>Alliances</h2>
			</div>
			<div class="col-md-2">
				<a href=""><img src="{{ url('images') }}/adobe-logo-icon-png-svg.png" alt="" class="img-fluid"></a>
			</div>
			<div class="col-md-2">
				<a href=""><img src="{{ url('images') }}/adobe-logo-icon-png-svg.png" alt="" class="img-fluid"></a>
			</div>
			<div class="col-md-2">
				<a href=""><img src="{{ url('images') }}/adobe-logo-icon-png-svg.png" alt="" class="img-fluid"></a>
			</div>
			<div class="col-md-2">
				<a href=""><img src="{{ url('images') }}/adobe-logo-icon-png-svg.png" alt="" class="img-fluid"></a>
			</div>
		</div>
	</div>
</section>
<div id="{{ $home->slider_home_1_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_1_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_2_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_2_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_3_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_3_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_4_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_4_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_5_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_5_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_6_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_6_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_7_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_7_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_8_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_8_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div id="{{ $home->slider_home_9_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $home->slider_home_9_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection