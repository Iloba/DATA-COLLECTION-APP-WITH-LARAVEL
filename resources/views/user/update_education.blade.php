@include('master.header')
    <div class="main-section">
        <div class="container-fluid">
            <div class="row">
                @include('master.sidebar')
                <div class="col-md-9 mt-4">
                    <div class="card p-4 shadow">
                        @include('master.errors')
                        <h3 class="mb-4">Update Education</h3>
                        <form action="{{}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            
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