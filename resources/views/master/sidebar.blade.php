<div style="height: 100vh;" class="col-md-3 bg-success" id="sidebar">
    {{-- <h3 class="mt-3 text-center text-white">Dashboard</h3> --}}
    
   <div class="passport section">
       @if ($user->passport)
       <img style="max-width: 100px; border: 3px solid white;" class="img-fluid shadow rounded-circle mt-5 mx-auto d-block" src="{{asset('storage/passport_photographs/'.$user->passport)}}" alt="Passports">
       @else
       <img style="max-width: 100px; border: 3px solid white;" class="img-fluid shadow rounded-circle mt-5 mx-auto d-block" src="{{asset('img/user.png')}}" alt="Passports"> <p class="text-center mt-3"><span class="text-light">Please Update Profile pic</span></p>
       @endif
       
        <h3 class="text-center mt-3  mb-4 bg-light rounded text-success p-2 shadow text-white">
            @if (session('user'))
                Welcome, {{session('user')->username}}
            @endif

        </h3>
        <ul>
            <li class="text-center mb-4"><h5><a class="text-light" href="{{route('dashboard')}}"> <i class="icofont icofont-user"></i> Dashboard</a></h5></li>
            <li class="text-center mb-4"><h5><a class="text-light" href="{{route('update_biodata', session('user'))}}"> <i class="icofont icofont-user"></i> Update Bio</a></h5></li>
            <li class="text-center mb-4"><h5><a class="text-light" href="{{route('update_education', session('user'))}}"> <i class="icofont icofont-graduate"></i> Update Education</a></h5></li>
            <li class="text-center mb-4"><h5><a class="text-light" href="{{route('update_experience', session('user'))}}"> <i class="icofont icofont-ui-office"></i> Update Experience</a></h5></li>
            <li class="text-center mb-4"><h5><a class="text-light" href="{{route('update_document', session('user'))}}"> <i class="icofont icofont-ui-file"></i> Upoad Documents</a></h5></li>
            <li class="text-center mb-4"><h5><a class="text-light" href=""> <i class="icofont icofont-pencil"></i> Update Essay</a></h5></li>
        </ul>
   </div>
</div>