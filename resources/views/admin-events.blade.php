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
                        <li><a href="{{ url('register-event') }}" class="active"><i class="fas fa-calendar-alt"></i>Events</a></li>
                    @endif
                </ul>
            </div>
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 class="mb-2 mt-4">Events</h1>
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal">Add Event</button>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th>Name</th>
                              <th>Speakers</th>
                              <th>Host</th>
                              <th>Spaces</th>
                              <th>Category</th>
                              <th>Language</th>
                              <th>Date</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->name }}</td>
                                    <td>{{ $event->speakers }}</td>
                                    <td>{{ $event->hosts }}</td>
                                    <td>{{ $event->spaces }}</td>
                                    <td>{{ $event->category }}</td>
                                    <td>{{ $event->language }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td class="text-center"><a href="{{ url('/delete-event/') }}/{{ $event->id }}"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal modal-admin" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center w-100" id="exampleModalLabel">Add Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('insertEvents') }}" method="post"  enctype="multipart/form-data">
            @csrf
              <div class="modal-body">
                    <div class="form-group">
                        <input type="date" name="date" placeholder="Date" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" placeholder="Description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="registration" placeholder="Register" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="video" placeholder="Url Video" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="imagen" class="form-control" placeholder="Imagen" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="spaces" placeholder="Spaces" class="form-control">
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="category">
                            <option selected hidden>Category...</option>
                            <option value="category_1">Category 1</option>
                            <option value="category_2">Category 2</option>
                            <option value="category_3">Category 3</option>
                          </select>        
                    </div>
                    <div class="form-group">
                        <select class="custom-select" name="language">
                            <option selected hidden>Language...</option>
                            <option value="english">English</option>
                            <option value="spanish">Spanish</option>
                          </select>        
                    </div>
                    <div class="form-group speakers_form">
                        <label for="">Speakers</label>
                        <a href="" id="add-speaker"><i class="fas fa-plus-circle"></i></a>
                        <div class="d-flex mb-2">
                            <input type="text" name="speaker_name[]" class="form-control" placeholder="Name">
                            <select class="custom-select" name="speaker_type[]">
                                <option selected hidden>Type Speaker...</option>
                                <option value="host">Host</option>
                                <option value="speaker">Speaker</option>
                            </select>
                            <input type="file"  name="speaker_image[]" placeholder="Name">
                        </div>
                    </div> 
              </div>
              <div class="modal-footer justify-content-center">
                <input type="submit" value="Save" class="btn btn-success">
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
    <script src="{{ url('js/main.js') }}"></script>
  </body>
</html>
