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
                        <li><a href="{{ route('dashboard') }}" class="active"><i class="fas fa-home"></i>Home</a></li>
                    @endif
                    @if( Auth::user()->type == "content" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ route('talents_page') }}"><i class="fas fa-home"></i>Talents Page</a></li>
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
                <h1 class="text-center mt-4 mb-4 pb-4">Welcome {{ Auth::user()->name }}</h1>
                <form action="{{ route('saveHome') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="border-bottom mb-4">
                        <input type="text" name="home_1_title" class="form-control mb-4" value="{{ $home->home_1_title }}">
                        <textarea  name="home_1_text" class="ckeditor form-control mb-4">{{ $home->home_1_text }}</textarea>
                        <div class="form-group mt-4">
                            <label for="home_1_img"><img src="{{ url('images/') }}/{{ $home->home_1_img }}" width="70" alt=""></label>
                            <input type="file" name="home_1_img" id="home_1_img" class="form-control-file">
                        </div>
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="home_2_title" class="form-control mb-4" value="{{ $home->home_2_title }}">
                        <textarea  name="home_2_text" class="ckeditor form-control mb-4">{{ $home->home_2_text }}</textarea>
                        <div class="form-group mt-4">
                            <label for="home_2_img"><img src="{{ url('images/') }}/{{ $home->home_2_img }}" width="70" alt=""></label>
                            <input type="file" name="home_2_img" id="home_2_img" class="form-control-file">
                        </div>    
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="home_3_title" class="form-control mb-4" value="{{ $home->home_3_title }}">
                        <textarea  name="home_3_text" class="ckeditor form-control mb-4">{{ $home->home_3_text }}</textarea>
                        <div class="form-group mt-4">
                            <label for="home_3_img"><img src="{{ url('images/') }}/{{ $home->home_3_img }}" width="70" alt=""></label>
                            <input type="file" name="home_3_img" id="home_3_img" class="form-control-file">
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                              @if($home->slider_home_1_active === "active")
                                <input class="form-check-input" type="checkbox" value="active" name="slider_home_1_active" id="slider_home_1_active" checked>
                              @else
                                <input class="form-check-input" type="checkbox" value="active" name="slider_home_1_active" id="slider_home_1_active">
                              @endif
                              <label class="form-check-label" for="slider_home_1_active">
                                Active
                              </label>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_1_video" class="form-control mb-4" value="{{ $home->slider_home_1_video }}">
                                <label for="slider_home_1_image"><img src="{{ url('images/') }}/{{ $home->slider_home_1_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_1_image" id="slider_home_1_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_2_video" class="form-control mb-4" value="{{ $home->slider_home_2_video }}">
                                <label for="slider_home_2_image"><img src="{{ url('images/') }}/{{ $home->slider_home_2_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_2_image" id="slider_home_2_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_3_video" class="form-control mb-4" value="{{ $home->slider_home_3_video }}">
                                <label for="slider_home_3_image"><img src="{{ url('images/') }}/{{ $home->slider_home_3_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_3_image" id="slider_home_3_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-12 border-bottom mb-4"></div>
                    </div>
                    <div class="border-bottom mb-4 pb-4">
                        <input type="text" name="home_5_title" class="form-control mb-4" value="{{ $home->home_5_title }}">
                        <textarea  name="home_5_text" class="ckeditor form-control mb-4">{{ $home->home_5_text }}</textarea>   
                    </div>
                    <div class="border-bottom mb-4">
                        <input type="text" name="home_4_title" class="form-control mb-4" value="{{ $home->home_4_title }}">
                        <textarea  name="home_4_text" class="ckeditor form-control mb-4">{{ $home->home_4_text }}</textarea>
                        <div class="form-group mt-4">
                            <label for="home_4_img"><img src="{{ url('images/') }}/{{ $home->home_4_img }}" width="70" alt=""></label>
                            <input type="file" name="home_4_img" id="home_4_img" class="form-control-file">
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                              @if($home->slider_home_2_active === "active")
                                <input class="form-check-input" type="checkbox" value="active" name="slider_home_2_active" id="slider_home_2_active" checked>
                              @else
                                <input class="form-check-input" type="checkbox" value="active" name="slider_home_2_active" id="slider_home_2_active">
                              @endif
                              <label class="form-check-label" for="slider_home_2_active">
                                Active
                              </label>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_4_video" class="form-control mb-4" value="{{ $home->slider_home_4_video }}">
                                <label for="slider_home_4_image"><img src="{{ url('images/') }}/{{ $home->slider_home_4_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_4_image" id="slider_home_4_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_5_video" class="form-control mb-4" value="{{ $home->slider_home_5_video }}">
                                <label for="slider_home_5_image"><img src="{{ url('images/') }}/{{ $home->slider_home_5_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_5_image" id="slider_home_5_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_6_video" class="form-control mb-4" value="{{ $home->slider_home_6_video }}">
                                <label for="slider_home_6_image"><img src="{{ url('images/') }}/{{ $home->slider_home_6_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_6_image" id="slider_home_6_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-12 border-bottom mb-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                              @if($home->counter_active === "active")
                                <input class="form-check-input" type="checkbox" value="active" name="counter_active" id="counter_active" checked>
                              @else
                                <input class="form-check-input" type="checkbox" value="active" name="counter_active" id="counter_active">
                              @endif
                              <label class="form-check-label" for="counter_active">
                                Active
                              </label>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="counter_number_1" class="form-control mb-4" value="{{ $home->counter_number_1 }}">
                            </div>  
                            <div class="form-group mt-4">
                                <input type="text" name="counter_text_1" class="form-control mb-4" value="{{ $home->counter_text_1 }}">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="counter_number_2" class="form-control mb-4" value="{{ $home->counter_number_2 }}">
                            </div>   
                            <div class="form-group mt-4">
                                <input type="text" name="counter_text_2" class="form-control mb-4" value="{{ $home->counter_text_2 }}">
                            </div>   
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="counter_number_3" class="form-control mb-4" value="{{ $home->counter_number_3 }}">
                            </div>
                            <div class="form-group mt-4">
                                <input type="text" name="counter_text_3" class="form-control mb-4" value="{{ $home->counter_text_3 }}">
                            </div>     
                        </div>
                        <div class="col-12 border-bottom mb-4 pb-4">
                            <textarea  name="counter_description" class="ckeditor form-control mb-4">{{ $home->counter_description }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                              @if($home->slider_home_3_active === "active")
                                <input class="form-check-input" type="checkbox" value="active" name="slider_home_3_active" id="slider_home_3_active" checked>
                              @else
                                <input class="form-check-input" type="checkbox" value="active" name="slider_home_3_active" id="slider_home_3_active">
                              @endif
                              <label class="form-check-label" for="slider_home_3_active">
                                Active
                              </label>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_7_video" class="form-control mb-4" value="{{ $home->slider_home_7_video }}">
                                <label for="slider_home_7_image"><img src="{{ url('images/') }}/{{ $home->slider_home_7_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_7_image" id="slider_home_7_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_8_video" class="form-control mb-4" value="{{ $home->slider_home_8_video }}">
                                <label for="slider_home_8_image"><img src="{{ url('images/') }}/{{ $home->slider_home_8_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_8_image" id="slider_home_8_image" class="form-control-file">
                            </div>    
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mt-4">
                                <input type="text" name="slider_home_9_video" class="form-control mb-4" value="{{ $home->slider_home_9_video }}">
                                <label for="slider_home_9_image"><img src="{{ url('images/') }}/{{ $home->slider_home_9_image }}" width="70" alt=""></label>
                                <input type="file" name="slider_home_9_image" id="slider_home_9_image" class="form-control-file">
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
