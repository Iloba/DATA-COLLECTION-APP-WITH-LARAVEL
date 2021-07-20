<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-registration</title>
    {{-- Import css style --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Javascript --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('icofont/icofont/icofont.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm py-4">
        <div class="container">
            <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
               @if (session()->has('user'))
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{session('user')->username}}
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                        <a class="dropdown-item" href="{{route('logout_user')}}" onclick="
                        event.preventDefault();

                        document.getElementById('logout-form').submit();
                        
                        ">Logout
                          <form action="{{route('logout_user')}}" method="POST" class="d-none" id="logout-form" >
                            @csrf
                          </form>
                        </a>
                      </div>
                  </li>

                @else
                <a class="nav-item btn btn-danger nav-link m-2 text-light" href="{{route('register_page')}}">Signup</a>
                <a class="nav-item btn btn-success nav-link m-2 text-light" href="{{route('login_page')}}">Login</a>
               @endif
               
                 
            </div>
            </div>
        </div>
      </nav>
</body>
</html>