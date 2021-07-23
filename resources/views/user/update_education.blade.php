@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4 mb-5">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Education</h3>
                        
                        
                        <form action="{{route('save_education', session('user'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-4 mb-3">
                                    <input name="level" type="text" class="form-control" placeholder="Education"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input name="cert" type="text" class="form-control" placeholder="Certificate Obatined"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input name="school" type="text" class="form-control" placeholder="Name of Institution"  id="">
                                </div>
                            </div>
                           
                            <div class="row mb-3">
                                <div class="col-md-4 mb-3">
                                    <input name="start_date" type="text" class="form-control" placeholder="Start Date"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input name="end_date" type="text" class="form-control" placeholder="End Date"  id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input name="grade" type="text" class="form-control" placeholder="Grade"  id="">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-success">
                                Save and Continue
                            </button>
                        </form>
                        <h2 class="mb-3 mt-3">Educational Background</h2>
                        @if ($education->count() > 0)
                              
                                <div class="row mb-4 mt-3">
                                    @foreach ($education as $school)
                                        <div class="col-md-12 mb-3">
                                            <div class="card p-2 shadow-sm">
                                                    <b class="text-success">{{$school->education}}</b>
                                                    {{$school->start_date}} to 
                                                    {{$school->end_date}}
                                                    <a style="color:red;" onclick="
                                                    event.preventDefault()
                                                    if(confirm('Are you sure you want to delete this entry?')){
                                                        document.getElementById('{{'form-delete-'.$school->id}}').submit();
                                                    }"; href="{{route('delete_education', $school->id)}}"> Delete</a>
                                            </div>
                                            
                                        </div>
                                        
                                        <form class="d-none" action="{{route('delete_education', $school->id)}}" method="POST" id="{{'form-delete-'.$school->id}}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                      
                                    @endforeach
                                   <div class="p-3">
                                    {{$education->links()}}
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