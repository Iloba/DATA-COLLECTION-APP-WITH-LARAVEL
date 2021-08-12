@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Bio data</h3>
                        <form action="{{route('savebiodata', $user)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>Passport Photograph</b></label>
                                    <input type="file" name="photo" class="form-control " value="hello">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>Username</b></label>
                                    <input type="text" name="username" class="form-control " value="{{$user->username}}" disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>Registration Number</b></label>
                                    <input type="text" name="reg_number" class="form-control " value="{{$user->reg_number}}" disabled>
                                </div>
                               
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" name="email" class="form-control " value="{{$user->email}}" disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>Phone</b></label>
                                    <input type="text" name="phone" class="form-control " value="{{$user->phone}}" >
                                </div>
                               
                                <div class="col-md-4 mb-3">
                                    <label for="email"><b>Gender</b></label>
                                   <select name="gender" class="form-control" id="">
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                   </select>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>Date or Birth</b></label>
                                    <input type="text" name="dob" class="form-control " value="{{$user->dob}}" >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>Marital status</b></label>
                                    <input type="text" name="marital_status" class="form-control " value="{{$user->marital_status}}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="username"><b>State of Origin</b></label>
                                    <input type="text" name="state" class="form-control " value="{{$user->state}}">
                                </div>
                               
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <label for="username"><b>Country</b></label>
                                    <input type="text" name="country" class="form-control " value="{{$user->country}}" >
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="username"><b>Address</b></label>
                                    <input type="text" name="address" class="form-control " value="{{$user->address}}">
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