<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User PDF Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- Javascript --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('icofont/icofont/icofont.min.css')}}">
</head>
<body class="bg-light">
  <div class="container">
    <div class="row  my-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="row p-4">
                    <div class="col-md-4">
                        <img style="width: 220px;" class="img-fluid" src="{{asset('storage/passport_photographs/'.$user->passport)}}" alt="hello">
                    </div>
                    <div class="col-md-8">
                        <h4>Username: {{$user->username}}</h4>
                        <h4>Registration number: {{$user->reg_number}}</h4>
                        <h4>Gender: {{$user->gender}}</h4>
                        <h4>Date of Birth: {{$user->dob}}</h4>
                        <h4>State: {{$user->state}}</h4>
                        <h4>Country: {{$user->country}}</h4>
                        <h4>Address: {{$user->address}}</h4>
                    </div>
                </div>
                <p class="text-center text-success mt-3">Thanks for registering</p>
            </div>
        </div>
    </div>
  </div>
</body>
</html>