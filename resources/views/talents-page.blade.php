<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Zig Works | Panel Admin</title>
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
    <div class="container-fluid admin-panel">
        <div class="row h-100">
            <div class="col-md-2">
                <img src="{{ url('images/ZW_WHITE.png') }}" alt="">
                <ul>
                    @if( Auth::user()->type == "content" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i>Home</a></li>
                    @endif
                    @if( Auth::user()->type == "content" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ route('talents_page') }}" class="active"><i class="fas fa-home"></i>Talents Page</a></li>
                    @endif
                    @if( Auth::user()->type == "content" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ route('employers_page') }}"><i class="fas fa-home"></i>Employers Page</a></li>
                    @endif
                    @if( Auth::user()->type == "super-admin")
                        <li><a href="{{ route('admin-users') }}"><i class="fas fa-user-tie"></i>Junior Users</a></li>
                    @endif
                    @if( Auth::user()->type == "database" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ route('admin-employers') }}"><i class="fas fa-briefcase"></i>Employers</a></li>
                        <li><a href="{{ route('admin-candidates') }}"><i class="fas fa-user-alt"></i>Talents</a></li>
                    @endif
                    @if( Auth::user()->type == "content" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ url('register-event') }}"><i class="fas fa-calendar-alt"></i>Events</a></li>
                    @endif
                </ul>
            </div>
            <div class="offset-md-2 col-md-6">
                <h1 class="text-center mt-4 mb-4 pb-4">Talents Page</h1>
                <form action="{{ route('saveTalents') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="banner_link" class="form-control mb-4" value="{{ $talents->banner_link }}">
                    </div>
                    <div class="border-bottom mb-4">
                        <div class="form-group mt-4">
                            <label for="banner_image"><img src="{{ url('images/') }}/{{ $talents->banner_image }}" width="70" alt=""></label>
                            <input type="file" name="banner_image" id="banner_image" class="form-control-file">
                        </div>    
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="title_1" class="form-control mb-4" value="{{ $talents->title_1 }}">
                    </div>
                    <div class="border-bottom mb-4">
                        <div class="form-group mt-4">
                            <label for="image_1"><img src="{{ url('images/') }}/{{ $talents->image_1 }}" width="70" alt=""></label>
                            <input type="file" name="image_1" id="image_1" class="form-control-file">
                        </div>    
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="title_2" class="form-control mb-4" value="{{ $talents->title_2 }}">
                        <textarea  name="text_2" class="ckeditor form-control mb-4">{{ $talents->text_2 }}</textarea>
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="title_3" class="form-control mb-4" value="{{ $talents->title_3 }}">
                        <textarea  name="text_3" class="ckeditor form-control mb-4">{{ $talents->text_3 }}</textarea>
                        <div class="form-group mt-4">
                            <label for="image_3"><img src="{{ url('images/') }}/{{ $talents->image_3 }}" width="70" alt=""></label>
                            <input type="file" name="image_3" id="image_3" class="form-control-file">
                        </div>    
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="title_4" class="form-control mb-4" value="{{ $talents->title_4 }}">
                        <textarea  name="text_4" class="ckeditor form-control mb-4">{{ $talents->text_4 }}</textarea>
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="title_6" class="form-control mb-4" value="{{ $talents->title_6 }}">
                        <textarea  name="text_6" class="ckeditor form-control mb-4">{{ $talents->text_6 }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                              @if($talents->slider_active === "active")
                                <input class="form-check-input" type="checkbox" value="active" name="slider_active" id="slider_active" checked>
                              @else
                                <input class="form-check-input" type="checkbox" value="active" name="slider_active" id="slider_active">
                              @endif
                              <label class="form-check-label" for="slider_active">
                                Active
                              </label>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_1_video" class="form-control mb-4" value="{{ $talents->slider_1_video }}">
                                <label for="slider_1_image"><img src="{{ url('images/') }}/{{ $talents->slider_1_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_1_image" id="slider_1_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_2_video" class="form-control mb-4" value="{{ $talents->slider_2_video }}">
                                <label for="slider_2_image"><img src="{{ url('images/') }}/{{ $talents->slider_2_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_2_image" id="slider_2_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_3_video" class="form-control mb-4" value="{{ $talents->slider_3_video }}">
                                <label for="slider_3_image"><img src="{{ url('images/') }}/{{ $talents->slider_3_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_3_image" id="slider_3_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-12 border-bottom mb-4"></div>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Save" class="btn btn-primary w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
  </body>
</html>
