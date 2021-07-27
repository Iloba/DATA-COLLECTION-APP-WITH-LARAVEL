@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4 mb-5">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Essay</h3>
                        <h4 class="text-success mb-3"><b>How can the Kaduna state government improve in the provision of job oppourtunities?</b></h4>
                        
                        <form action="{{route('save_essay', session('user'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-3">
                                    <label for=""><b>Essay</b></label>
                                    <textarea name="essay" class="form-control"  placeholder="How can the Kaduna state government improve in the provision of job oppourtunities"  cols="30" rows="10" >{{$essays->essay}}</textarea>
                                </div>
                               
                            </div>
                            <button type="submit" class="btn btn-success mb-3">
                                Save and Continue
                            </button>
                        </form>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
@include('master.footer')