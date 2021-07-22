@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4 mb-5">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Education</h3>
                        @if ($education->count() > 0)
                          
                            <div class="row">
                                @foreach ($education as $school)
                                    <div class="col-md-12 mb-3">
                                        <div class="card p-2 shadow-sm">
                                                <b class="text-success">{{$school->education}}</b>
                                                {{$school->start_date}} to 
                                                {{$school->end_date}}
                                                <a style="color:red;" href="#"> Delete</a>
                                        </div>
                                        
                                    </div>
                                    
                                    <form action="">

                                    </form>
                                    {{$education->links()}}
                                @endforeach
                            </div>
                          
                        @else
                        <p>You have not added any Educational history</p>
                        @endif
                        <h2 class="mb-3">Add new entry</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('master.footer')