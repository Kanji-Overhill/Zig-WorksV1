<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Zig Works</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/glide.core.min.css') }}">

    <!-- Optional Theme Stylesheet -->
    <link rel="stylesheet" href="{{ url('css/glide.theme.min.css') }}">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ab58011517.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ url('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="position-fixed" style="z-index: 99;">
           <div class="container-fluid">
               <div class="row justify-content-between">
                   <div class="col-md-3 pl-0 pr-0 logo-content">
                       <img src="{{url('images/ZW_WHITE.png')}}" alt="" class="img-fluid logo">
                       <div class="triangulo-left"></div>
                   </div>
                   <div class="col-md-8 d-flex align-items-center justify-content-end">
                        <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#!">About</a>
                                </li>
                                @if(Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('events') }}">Events</a>
                                    </li>
                                @else 
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('employers') }}">Employers</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('talents') }}">Talents</a>
                                    </li>
                                @if(Auth::check())
                                    <li class="nav-item login-link">
                                        <a class="nav-link" href="#">Hello {{ Auth::user()->name }}</a>
                                    </li>
                                @else  
                                    
                                    <li class="nav-item login-link">
                                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                                    </li>
                                     <li class="nav-item login-link">
                                    <a class="nav-link sign-up" data-toggle="modal" data-target="#exampleModal" href="{{ url('/candidate-register') }}">Sign Up</a>
                                    </li>
                                @endif
                            </ul>
                          </div>
                        </nav>
                   </div>
               </div>
           </div>
        </header>
        <main>
            @yield('content')
        </main>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content modal-blue">
              <div class="modal-header justify-content-center">
                <h5 class="modal-title text-center" id="exampleModalLabel">Would you like to registrer?</h5>
              </div>
              <div class="modal-body">
                    <ul>
                        <li class="login-link">
                            <a class="nav-link" href="{{ url('/employer-register') }}">Employer</a>
                        </li>
                        <li class="login-link ml-4">
                            <a class="nav-link" href="{{ url('/candidate-register') }}">Talent</a>
                        </li>
                    </ul>
              </div>
            </div>
          </div>
        </div>
        <footer class="position-relative">
            <img src="{{ url('images/artice.png') }}" alt="" class="triangle-green">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p>Copyright 2021. All rights reserved</p>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <ul>
                            <li><a href=""><img src="{{ url('images/logotipo-de-linkedin.png') }}" alt=""></a></li>
                            <li><a href=""><img src="{{ url('images/facebook.png') }}" alt=""></a></li>
                            <li><a href=""><img src="{{ url('images/gorjeo.png') }}" alt=""></a></li>
                            <li><a href=""><img src="{{ url('images/youtube.png') }}" alt=""></a></li>
                            <li><a href=""><img src="{{ url('images/instagram.png') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ url('js/glide.min.js') }}"></script>
    @if(Route::is('events') )
    <script>
        new Glide('.slider-1').mount();
    </script>
    @endif
    @if(Route::is('home'))
    <script>
        new Glide('.glide_home', {
            type: 'carousel',
            startAt: 0,
            gap: 30,
            perView: 3
        }).mount()

        new Glide('.glide_home_2', {
            type: 'carousel',
            startAt: 0,
            gap: 30,
            perView: 3
        }).mount()

        new Glide('.glide_home_3', {
            type: 'carousel',
            startAt: 0,
            gap: 30,
            perView: 3
        }).mount()
    </script>
    @endif
    @if(Route::is('talents') )
    <script>
        new Glide('.glide_home_2', {
            type: 'carousel',
            startAt: 0,
            gap: 30,
            perView: 3
        }).mount()
    </script>
    @endif
    @if(Route::is('employers') )
    <script>
        new Glide('.glide_home_2', {
            type: 'carousel',
            startAt: 0,
            gap: 30,
            perView: 3
        }).mount()
    </script>
    @endif
    <script src="{{ url('js/main.js') }}"></script>
    <script>
        $(document).on('keydown', '#search', function(ev) {
            if(ev.key === 'Enter') {
                var search = $('#search').val();
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "{{route('eventsSearch')}}",
                    type: 'POST',
                    data: {
                        search: search
                    },
                    success: function(response){
                        if(response['events'].length === 0){
                            $('.alert-search strong').html("No results found");
                            $('.alert-search').removeClass("d-none");
                        }else if(response['events'].length != 0){
                            $('.alert-search').addClass("d-none");
                            $('.events-search').html("");
                            $.each(response['events'], function(index, val) {
                                $('.events-search').append('<div class="col-md-4 grid-item '+val.category+' '+val.language+'"><a href="" data-toggle="modal" data-target="#'+val.id+'"><div class="content-coference"><div class="event-image d-flex align-items-center justify-content-center" style="background-image: url({{ url('images/') }}/'+val.image+');"><img src="{{ url('images/play.svg') }}" alt=""></div><h3>'+val.name+'</h3><p><b>By:</b> Loremp Ipsum</p></div></a></div>');
                            });
                        }else{
                            $('.alert-search strong').html("Error");
                        }
                    }
                });
            }
        });
        $(document).on('keydown', '.email-input', function(ev) {
            if(ev.key === 'Enter') {
                var email = $(this).val();
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "{{route('sendMail')}}",
                    type: 'POST',
                    data: {
                        email: email
                    },
                    success: function(response){
                        $(".email-share").removeClass("d-none");
                        $(".email-input").addClass("d-none");
                        $(".email-success").removeClass("d-none");
                    }
                });
            }
        });
        $( ".email-share" ).click(function(e) {
            e.preventDefault();
            $(this).addClass("d-none");
            $(".email-input").removeClass("d-none");
        });
        $( ".order-link" ).click(function(e) {
            e.preventDefault();
            var order = $(this).data("order");
            $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "{{route('orderEvents')}}",
                    type: 'POST',
                    data: {
                        order: order
                    },
                    success: function(response){
                        if(response['events'].length === 0){
                            $('.alert-search strong').html("No results found");
                            $('.alert-search').removeClass("d-none");
                        }else if(response['events'].length != 0){
                            $('.alert-search').addClass("d-none");
                            $('.events-search').html("");
                            $.each(response['events'], function(index, val) {
                                $('.events-search').append('<div class="col-md-4 grid-item '+val.category+' '+val.language+'"><a href="" data-toggle="modal" data-target="#'+val.id+'"><div class="content-coference"><div class="event-image d-flex align-items-center justify-content-center" style="background-image: url({{ url('images/') }}/'+val.image+');"><img src="{{ url('images/play.svg') }}" alt=""></div><h3>'+val.name+'</h3><p><b>By:</b> Loremp Ipsum</p></div></a></div>');
                            });
                        }else{
                            $('.alert-search strong').html("Error");
                        }
                    }
                });
        });
        
    </script>
</html>
