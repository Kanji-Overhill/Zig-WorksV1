@extends('layout')
@section('content')
<section class="glide slider-1">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      @foreach ($events as $event)
      	<li class="glide__slide">
      	<div class="background" style="background-image: url({{ url('images/events/') }}/{{ $event->image }});">
      		<div class="container">
	      		<div class="row row-h align-items-end">
	      			<div class="col-12 text-center">
	      				<h2>{{$event->name}}</h2>
	      				<a href="{{ $event->registration }}">Sign in</a>
	      			</div>
	      			<div class="col-12 align-self-end">
	      				<ul class="d-flex flex-row justify-content-around">
	      					<li class="d-flex flex-column justify-content-center">
	      						<p><b>Topic</b></p>
	      						<p>{{ $event->name }}</p>
	      					</li>
	      					<li class="d-flex flex-row align-items-center">
	      						<img src="{{ url('images/calendar.svg') }}" alt="">
	      						<div>
	      							<p><b>Date</b></p>
	      							<p>{{ $event->date }}</p>
	      						</div>
	      					</li>
	      					<li class="d-flex flex-row align-items-center">
	      						<img src="{{ url('images/multi-icon.svg') }}" alt="">
	      						<div>
	      							<p><b>Remaning</b></p>
	      							<p>{{ $event->spaces }} spaces</p>
	      						</div>
	      					</li>
	      					<li class="d-flex flex-row align-items-center">
	      						<img src="{{ url('images/microphone.svg') }}" alt="">
	      						<div>
	      							<p><b>Speakers</b></p>
	      							<p>{{ countSpeakers($event->id,'speaker') }} profesional speakers</p>
	      						</div>
	      					</li>
	      					<li class="d-flex flex-row align-items-center">
	      						<img src="{{ url('images/microphone.svg') }}" alt="">
	      						<div>
	      							<p><b>Host</b></p>
	      							<p>{{ countSpeakers($event->id,'host') }} profesional</p>
	      						</div>
	      					</li>
	      				</ul>
	      			</div>
	      		</div>
	      	</div>
	    	</div>
	      	<div class="container">
	      			<div class="row">
						<div class="col-12">
							<p class="text-center mb-4 pb-4 pt-4 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<div class="row">
								@foreach (getSpeakers($event->id,'host') as $speaker)
									<div class="col-md-6">
										<div class="event-container">
											<div class="img-people" style="background-image: url({{ url('images/speakers/') }}/{{ $speaker->image }});"></div>
											<p><b>Host: </b>{{ $speaker->name }}</p>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="row justify-content-end">
						<div class="col-md-7">
							<div class="row">
								@foreach (getSpeakers($event->id,'speaker') as $speaker)
									<div class="col-md-4">
										<div class="event-container">
											<div class="img-people" style="background-image: url({{ url('images/speakers/') }}/{{ $speaker->image }});"></div>
											<p><b>Speaker: </b>{{ $speaker->name }}</p>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
	      	</div>				
      	
      </li>
      @endforeach
    </ul>
    <div class="glide__bullets" data-glide-el="controls[nav]">
	    <button class="glide__bullet" data-glide-dir="=0"></button>
	    <button class="glide__bullet" data-glide-dir="=1"></button>
	    <button class="glide__bullet" data-glide-dir="=2"></button>
	</div>
	<div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><img src="{{ url('images/002-left-arrow.png') }}" alt=""></button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><img src="{{ url('images/001-right-arrow.png') }}" alt=""></button>
  </div>
  </div>
</section>
<section class="events-1">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Conferences</h2>
			</div>
		</div>
	</div>
	<div class="conference-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 filters text-right mb-4">
					<a href="" data-toggle="modal" data-target="#filterModal"><img src="{{ url('images/filter-filled-tool-symbol.png') }}" alt="" class="img-fluid"> Filter</a>
					<a href="" data-toggle="modal" data-target="#orderModal"><img src="{{ url('images/filter.png') }}" alt="" class="img-fluid"> Order</a>
					<input type="text" class="form-control d-inline" name="search" id="search" placeholder="Look for a conference" style="width: auto">
				</div>
				<div class="col-md-3">
					<div class="alert alert-warning alert-search d-none text-center" role="alert">
					  <strong></strong>
					</div>
				</div>	
			</div>
			<div class="row events-search">
				@foreach ($events as $event)
					<div class="col-md-4 grid-item {{ $event->category }} {{ $event->language }}">
						<a href="" data-toggle="modal" data-target="#{{ $event->id }}">
							<div class="content-coference">
								<div class="event-image d-flex align-items-center justify-content-center" style="background-image: url({{ url('images/events/') }}/{{ $event->image }});">
									<img src="{{ url('images/play.svg') }}" alt="">
								</div>
								<h3>{{ $event->name }}</h3>
								<p><b>By:</b> Loremp Ipsum</p>
							</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>

@foreach ($events as $event)
	<!-- Modal -->
<div class="modal" id="{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="https://www.youtube.com/embed/{{ $event->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <ul class="d-flex justify-content-end">
        	<li>
        		<a href="" class="email-share"><img src="{{ url('images/email.svg') }}" alt=""></a>
        		<input type="text" class="form-control email-input d-none mr-2" placeholder="Email invit registration" data-id="{{ $event->id }}">
        	</li>
        	<li class="d-none">
        		<a href="" class="share-link"><img src="{{ url('images/share.svg') }}" alt=""></a>
        		<ul class="social-share d-none">
        			<li><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.youtube.com/watch?v=r8J10VdfyZU&ab_channel=CodePioneers" target="_blank"><img src="{{ url('images/001-facebook.png') }}" alt=""></a></li>
        			<li><a href="https://twitter.com/intent/tweet?text=https://www.youtube.com/watch?v=r8J10VdfyZU&ab_channel=CodePioneers" target="_blank"><img src="{{ url('images/002-twitter.png') }}" alt=""></a></li>
        			<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//zig-works.com/&title=Zig%20works&summary=&source=" target="_blank"><img src="{{ url('images/003-linkedin.png') }}" alt=""></a></li>
        		</ul>
        	</li>
        </ul>
        <div class="alert alert-success email-success d-none text-center mt-2" role="alert">
				    <strong>Se ha enviado</strong> tu correo de invitacion
				</div>
        <h3>{{ $event->name }}</h3>
        <p>{{ $event->description }}</p>
        <div class="container">
        	<div class="row align-items-center">
						<div class="col-md-5">
							<div class="row">
								<div class="col-md-12">
									<div class="event-container">
										<div class="img-people" style="background-image: url({{ url('images/men-black.jpg') }});"></div>
										<p><b>Host: </b>Loremp Impsum</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12">
									<div class="event-container">
										<div class="img-people" style="background-image: url({{ url('images/men-black.jpg') }});"></div>
										<p><b>Speaker: </b>Loremp Impsum</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="event-container">
										<div class="img-people" style="background-image: url({{ url('images/men-black.jpg') }});"></div>
										<p><b>Speaker: </b>Loremp Impsum</p>
									</div>
								</div>
							</div>
						</div>
					</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- Modal -->
<div class="modal" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-7 filters-group mb-4">
		        	<h3>Category</h3>
		        	<button data-filter="all">All</button>
							<button data-filter="category_1">Category 1</button>
							<button data-filter="category_2">Category 2</button>
							<button data-filter="category_3">Category 3</button>
							<button data-filter="chemistry">Chemistry</button>
						</div>
						<div class="col-md-5 filters-group">
							<h3>Language</h3>
							<button data-filter="all">All</button>
							<button data-filter="english">English</button>
							<button data-filter="spanish">Spanish</button>
						</div>		
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12 filters-group mb-4">
		        	<h3>Sort</h3>
							<a href="" class="order-link" data-order="desc">Recent</a>
							<a href="" class="order-link" data-order="asc">Oldest</a>
						</div>	
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection