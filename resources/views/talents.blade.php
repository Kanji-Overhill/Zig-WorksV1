@extends('layout')
@section('content')
<section class="home home-1 position-relative">
	<a data-toggle="modal" data-target="#{{ $talents->banner_link }}">
		<img src="{{ url('images') }}/{{ $talents->banner_image }}" alt="" class="img-fluid w-100">
		<img class="play-modal" src="{{ url('images/play-2.png') }}" alt="">
	</a>
</section>
<section class="talent-2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="blue text-center">
					{{ $talents->title_1 }}
				</h2>
				<img src="{{ url('images') }}/{{ $talents->image_1 }}" alt="" class="img-fluid w-100">
			</div>
		</div>
	</div>
</section>
<section class="home home-2">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-12 mb-2rem">
				<h2 class="blue-2 text-justify mb-4">{{ $talents->title_2 }}</h2>
				{!! $talents->text_2 !!}
			</div>
			<div class="col-md-4">
				<img src="{{ url('images') }}/{{ $talents->image_3 }}" alt="" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2 class="blue-2">{{ $talents->title_3 }}</h2>
				{!! $talents->text_3 !!}
			</div>
			<div class="col-md-12 mt-2rem mb-2rem">
				<h2 class="blue-2 text-justify mb-4">{{ $talents->title_4 }}</h2>
				{!! $talents->text_4 !!}
			</div>
		</div>
	</div>
</section>
<section class="home home-8">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="glide_home_2">
					@if($talents->slider_active === "active")
						<div class="glide__track" data-glide-el="track">
						    <ul class="glide__slides">
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $talents->slider_1_video }}"><img src="{{ url('images') }}/{{ $talents->slider_1_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $talents->slider_2_video }}"><img src="{{ url('images') }}/{{ $talents->slider_2_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $talents->slider_3_video }}"><img src="{{ url('images') }}/{{ $talents->slider_3_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						    </ul>
						</div>
					@endif
				</div>                    
			</div>
		</div>
	</div>
</section>
<section class="home home-2">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-12 mb-2rem">
				<h2 class="blue-2 text-center">{{ $talents->title_6 }}</h2>
				{!! $talents->text_6 !!}
			</div>
		</div>
	</div>
</section>
<!-- Modal Promocional 1 -->
<div id="{{ $talents->slider_1_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $talents->slider_1_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Promocional 2 -->
<div id="{{ $talents->slider_2_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $talents->slider_2_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Promocional 3 -->
<div id="{{ $talents->slider_3_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $talents->slider_3_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Promocional 3 -->
<div id="{{ $talents->banner_link }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $talents->banner_link }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection