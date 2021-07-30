@include('master.header')
<div class="main-section">
    @include('master.errors')
    <div class="dashboard">
        <div class="container-fluid">
            <div class="row" id="main-dashboard">
                @include('master.sidebar')
                <div class="col-md-9 p-3">
                    
                   @if (session('user')->email_verified)
                   <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                        Account Verified 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>

                    @else
                    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert"   >
                        Account NOT Verified!! Please check email to verify 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                   @endif
                    @if (session('user'))
                    <h3 class="mt-5 pl-3">Welcome, {{session('user')->username}}</h3>  
                    @endif
                    
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-4 mb-3">  
                                <a href="{{route('update_biodata', session('user'))}}">
                                    <div class="card shadow p-5">
                                        <h2 class="text-center"><i class="p-3 shadow icofont icofont-user btn btn-success rounded-circle"></i></h2>
                                      <h3 class="text-center">Update Bio Data</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">  
                                <a href="{{route('update_education', session('user'))}}">
                                    <div class="card shadow p-5">
                                        <h2 class="text-center"><i class=" p-3 shadow  icofont icofont-graduate btn btn-success rounded-circle"></i></h2>
                                      <h3 class="text-center">Educational Background</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">  
                                <a href="{{route('update_experience', session('user'))}}">
                                    <div class="card shadow p-5">
                                        <h2 class="text-center"><i class=" p-3 shadow  icofont icofont-ui-office btn btn-success rounded-circle"></i></h2>
                                      <h3 class="text-center">Update Work Experiences</h3>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4 mb-3">  
                                <a href="{{route('update_document', session('user'))}}">
                                    <div class="card shadow p-5">
                                        <h2 class="text-center"><i class=" p-3 shadow  icofont icofont-ui-file btn btn-success rounded-circle"></i></h2>
                                      <h3 class="text-center">Upload Documents</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">  
                                <a href="{{route('update_essay', session('user'))}}">
                                    <div class="card shadow p-5">
                                        <h2 class="text-center"><i class=" p-3 shadow  icofont icofont-pencil btn btn-success rounded-circle"></i></h2>
                                      <h3 class="text-center">Write Essay</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">  
                                <a href="{{route('preview_data', session('user'))}}">
                                    <div class="card shadow p-5">
                                        <h2 class="text-center"><i class=" p-3 shadow  icofont icofont-eye btn btn-light rounded-circle"></i></h2>
                                      <h4 class="text-center">Preview Application</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('master.footer')