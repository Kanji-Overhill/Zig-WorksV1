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
        <div class="row h-100 justify-content-between">
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
                        <li><a href="{{ route('admin-employers') }}" class="active"><i class="fas fa-briefcase"></i>Employers</a></li>
                        <li><a href="{{ route('admin-candidates') }}"><i class="fas fa-user-alt"></i>Talents</a></li>
                    @endif
                    @if( Auth::user()->type == "content" || Auth::user()->type == "super-admin" || Auth::user()->type == "both" )
                        <li><a href="{{ url('register-event') }}"><i class="fas fa-calendar-alt"></i>Events</a></li>
                    @endif
                </ul>
            </div>
            <div class="col-md-10">
                <h1 class="mt-4">Talents</h1>
                <div class="row">
                    @if(isset($registro))
                        <div class="alert alert-success" role="alert">
                            <strong>Created talent </strong> an email has been sent to verify
                        </div>
                    @endif
                    <div class="col-md-12">
                        <a href="{{ route('candidates-export') }}" class="btn btn-success mb-4"><i class="fas fa-file-excel"></i> Export</a>
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i> Add Talent</button>
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Enable/Disabled</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($employers as $employer)
                                <tr>
                                  <td>{{ $employer->first_name }} {{ $employer->last_name }}</td>
                                  <td>{{ $employer->email }}</td>
                                  <td>
                                      @if($employer->active === 1)
                                        <a href="{{ url('/activate-user') }}/{{ $employer->id }}/0">Disabled</a>
                                      @else
                                        <a href="{{ url('/activate-user') }}/{{ $employer->id }}/1">Enable</a>
                                      @endif
                                  </td>
                                
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
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create new Employer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                        <form action="{{ route('insert-employers') }}" method="POST">
                            @csrf
                            <input type="text" name="first_name" placeholder="First Name" class="form-control mb-2">
                            <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-2">
                            <input type="email" name="email" placeholder="Email" class="form-control mb-2">
                            <input type="password" name="password" placeholder="Password" class="form-control mb-2">
                            <input class="btn btn-primary" type="submit" value="Save">
                        </form>
          </div>
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
