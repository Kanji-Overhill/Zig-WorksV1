@extends('layout')
@section('content')
<section class="home home-1 position-relative">
	<a data-toggle="modal" data-target="#{{ $employers->banner_link }}">
		<img src="{{ url('images') }}/{{ $employers->banner_image }}" alt="" class="img-fluid w-100">
		<img class="play-modal" src="{{ url('images/play-2.png') }}" alt="">
	</a>
</section>
<section class="talent-2">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="blue text-center">
					{{ $employers->title_1 }}
				</h2>
			</div>
		</div>
	</div>
</section>
<section class="home home-2">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-md-8">
				<h2 class="blue-2">{{ $employers->title_2 }}</h2>
				{!! $employers->text_2 !!}
			</div>
			<div class="col-md-3">
				<img src="{{ url('images') }}/{{ $employers->image_2 }}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="home home-3">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-3">
				<img src="{{ url('images') }}/{{ $employers->image_2 }}" alt="" class="img-fluid">                          
			</div>
			<div class="col-md-7">
				<h2 class="green-3">{{ $employers->title_3 }}</h2>
	            {!! $employers->text_3 !!}  
			</div>
		</div>
	</div>
</section>
<section class="home home-8">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="glide_home_2">
				  @if($employers->slider_active === "active")
						<div class="glide__track" data-glide-el="track">
						    <ul class="glide__slides">
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $employers->slider_1_video }}"><img src="{{ url('images') }}/{{ $employers->slider_1_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $employers->slider_2_video }}"><img src="{{ url('images') }}/{{ $employers->slider_2_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
						      <li class="glide__slide" data-toggle="modal" data-target="#{{ $employers->slider_3_video }}"><img src="{{ url('images') }}/{{ $employers->slider_3_image }}" alt="" class="img-fluid"><img class="play-modal" src="{{ url('images/play.png') }}" alt=""></li>
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
				<h2 class="blue-2 text-center">{{ $employers->title_4 }}</h2>
				<p class="text-justify mt-4">{{ $employers->text_4 }} </p>
			</div>
		</div>
	</div>
</section>

<!-- Modal Promocional 2 -->
<div id="{{ $employers->slider_2_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $employers->slider_2_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Promocional 3 -->
<div id="{{ $employers->slider_3_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $employers->slider_3_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Promocional 3 -->
<div id="{{ $employers->slider_3_video }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $employers->slider_3_video }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Modal Promocional 3 -->
<div id="{{ $employers->banner_link }}" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/{{ $employers->banner_link }}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection