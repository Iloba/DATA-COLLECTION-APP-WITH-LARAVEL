@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4 mb-5">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Work Experience</h3>
                        
                        
                        <form action="{{route('save_experience', session('user'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-4 mb-3">
                                    <label for=""><b>Position Held</b></label>
                                    <input name="position" type="text" class="form-control" placeholder="Position Held"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for=""><b>Field</b></label>
                                    <input name="field" type="text" class="form-control" placeholder="Name of Field"  id="">
                                </div>
                                
                                <div class="col-md-4 mb-3">
                                    <label for=""><b>Employer</b></label>
                                    <input name="employer" type="text" class="form-control" placeholder="Name of Employer"  id="">
                                </div>
                                
                            </div>
                           
                            <div class="row mb-3">
                                <div class="col-md-4 mb-3">
                                    <label for=""><b>Start Date</b></label>
                                    <input name="start_date" type="text" class="form-control" placeholder="Start Date"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for=""><b>End Date</b></label>
                                    <input name="end_date" type="text" class="form-control" placeholder="End Date"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for=""><b>Experience</b></label>
                                    <input name="experience" type="text" class="form-control" placeholder="Eg: Good or Bad"  id="">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-success mb-3">
                                Save and Continue
                            </button>
                        </form>
                        <h2 class="mb-3 mt-3">Work Experiences</h2>
                        @if ($experiences->count() > 0)
                              
                                <div class="row mb-4 mt-3">
                                    @foreach ($experiences as $experience)
                                        <div class="col-md-12 mb-3">
                                            <div class="card p-2 shadow-sm">
                                                    <b class="text-success">{{$experience->position}}</b>
                                                    {{$experience->start_date}} -
                                                    {{$experience->end_date}}
                                                    <a style="color:red;" onclick="
                                                    event.preventDefault()
                                                    if(confirm('Are you sure you want to delete this entry?')){
                                                        document.getElementById('{{'form-delete-'.$experience->id}}').submit();
                                                    }"; href="{{route('delete_experience', $experience->id)}}"> Delete</a>
                                            </div>
                                            
                                        </div>
                                        
                                        <form class="d-none" action="{{route('delete_experience', $experience->id)}}" method="POST" id="{{'form-delete-'.$experience->id}}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                      
                                    @endforeach
                                   <div class="p-3">
                                    {{$experiences->links()}}
                                   </div>
                                </div>
                              
                            @else
                            <p>You have not added any Educational history</p>
                            @endif
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
@include('master.footer')