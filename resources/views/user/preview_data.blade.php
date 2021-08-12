@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4 mb-5">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Preview Application</h3>
                        <h3 class="text-success mb-3"><b>Bio Data</b></h3>
                        <div class="row mb-5">
                            <div class="col-md-2">
                                <img class="img-fluid shadow" id="img" src="{{asset('storage/passport_photographs/'.$user->passport)}}" alt="">
                            </div>
                            <div class="col-md-2 mb-3">
                                <p><b>Username</b>: {{$user->username}}</p>
                                <p><b>Registration Number</b>: {{$user->reg_number}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><b>Email</b>: {{$user->email}}</p>
                                <p><b>Phone Number</b>: {{$user->phone}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><b>Gender</b>: {{$user->gender}}</p>
                                <p><b>Date of Birth</b>: {{$user->dob}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><b>State</b>: {{$user->state}}</p>
                                <p><b>Country</b>: {{$user->country}}</p>
                            </div>
                            <div class="col-md-2">
                                <p><b>Address</b>: {{$user->address}}</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-success mb-3"><b>Educational Background</b></h3>
                                @if ($education->count() > 0)
                              
                                <div class="row mb-2 mt-3">
                                    
                                    @foreach ($education as $school)
                                        <div class="col-md-12 mb-3">
                                            <div class="card p-2 shadow-sm">
                                                    <b class="text-success">{{$school->education}}</b>
                                                    {{$school->start_date}} -
                                                    {{$school->end_date}}
                                                    
                                            </div>
                                            
                                        </div>
                                    @endforeach
                                   <div class="p-3">
                                    {{$education->links()}}
                                   </div>
                                </div>
                              
                                @else
                                <p class="text-danger">You have not added any Educational history</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-success"><b>Working Experience</b></h3>
                                <div class="row mb-2 mt-3">
                                    @if ($experiences->count() > 0)
                                        @foreach ($experiences as $experience)
                                        <div class="col-md-12 mb-2">
                                            <div class="card p-2 shadow-sm">
                                                    <b class="text-success">{{$experience->position}}</b>
                                                    {{$experience->start_date}} -
                                                    {{$experience->end_date}}  
                                            </div>    
                                        </div>
                                  
                                         @endforeach
                                        <div class="p-3">
                                            {{$experiences->links()}}
                                        </div>
                                    @else
                                    <p class="ml-4 text-danger">You have not added any Experiences</p>
                                    @endif
                                </div>
                            </div>
                        
                        </div>
                        <div class="">
                            <h3 class="text-success"><b>Uploaded Documents</b></h3>
                            @if ($documents->count() > 0)
                            
                                <div class="table-responsive">
                                    <table class="table table-bordered ">
                                        <thead>
                                                <tr>
                                                   
                                                    <th>
                                                        Document
                                                    </th>
                                                    <th>
                                                       Document Name
                                                    </th>
                                                    
                                                </tr>
                                        </thead>
                                        <tbody>
                                               @foreach ($documents as $document)
                                                    <tr>
                                                       
                                                        <td>
                                                            {{$document->document}}
                                                        </td>
                                                        <td>
                                                            {{$document->document_name}}
                                                        </td>
                                                        
                                                        
                                                    </tr>
                                               @endforeach 
                                        </tbody>
                                    </table> 
                                    {{$documents->links()}}
                                </div>
                           
                            @else
                         
                            <p class="mt-3 text-danger">You have not uploaded any documents  Please Do Upload some</p>   
                            @endif
                        </div>
                        <div class="mb-5">
                            <h3 class="text-success"><b>Essay</b></h3>
                            @if (is_null($user->essay))
                                <p class="text-danger">Please Fill out the essay section</p>
                            @else
                            <p class="">{{$user->essay}}</p>
                            @endif
                            
                        </div>
                      
                        
                        @if ($documents->count() > 0)
                        <span class="mx-auto mb-1 text-danger"><b>Please click the check box below to confirm submission</b></span>
                            <form class="mb-3" action="{{route('submit_form', $user)}}" method="POST" id="{{'submit'.$user->id}}">
                                <input type="checkbox" name="confirm_submission" class="form-control" value="Please Click this box to confirm">
                                @csrf
                            </form>
                            <div class="mx-auto">
                                <a href="{{route('submit_form', $user)}}" class="btn btn-success btn-lg" onclick="
                                    event.preventDefault();
                                    if(confirm('Are you sure you want to submit?? you will not be able to Edit Details Again')){
                                        document.getElementById('{{'submit'.$user->id}}').submit();
                                    }
                                ">
                                    Submit Form
                                </a>
                                
                            </div> 
                        @else
                            <p class="text-danger text-center">Please Update Data to be able to submit</p>
                    
                        @endif
                        
                                
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
@include('master.footer')
