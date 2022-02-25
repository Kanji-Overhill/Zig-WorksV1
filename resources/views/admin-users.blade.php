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
                        <li><a href="{{ route('admin-users') }}" class="active"><i class="fas fa-user-tie"></i>Junior Users</a></li>
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
            <div class="col-md-10">
                <h1 class="mt-4">Junior Users</h1>
                <div class="row">
                    <div class="col-md-8">
                        <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th>Type</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Enable/Disabled</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($users as $user)
                                <tr>
                                  <td>{{ $user->type }}</td>
                                  <td>{{ $user->name }}</td>
                                  <td>{{ $user->email }}</td>
                                  <td>
                                      @if($user->active === 1)
                                        <a href="{{ url('/activate-user') }}/{{ $user->id }}/0">Disabled</a>
                                      @else
                                        <a href="{{ url('/activate-user') }}/{{ $user->id }}/1">Enable</a>
                                      @endif
                                  </td>
                                  <td><a href="{{ url('/delete-users/') }}/{{ $user->id }}"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                            @endforeach
                          </tbody>
                        </table>  
                    </div>
                    <div class="col-md-4 text-center">
                        <h3>Create new Junior User</h3>
                        <form action="{{ route('insert-users') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Name" class="form-control mb-2">
                            <input type="email" name="email" placeholder="Email" class="form-control mb-2">
                            <input type="password" name="password" placeholder="Password" class="form-control mb-2">
                            <select name="type" id="" class="form-control mb-2">
                                <option hidden selected>Select type junior user</option>
                                <option value="database">Database</option>
                                <option value="content">Content</option>
                                <option value="both">Both</option>
                            </select>
                            <input class="btn btn-primary" type="submit" value="Save">
                        </form>
                    </div>
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
