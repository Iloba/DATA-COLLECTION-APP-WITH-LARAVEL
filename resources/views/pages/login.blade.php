@include('master.header')
<div class="main-section mt-3">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                @include('master.errors')
                <div class="card p-3 shadow-sm">
                    <h2 class="text-center mb-5">Login</h2>
                    <form action="" method="POST">
                        @csrf
                        <input type="text" name="email" class="form-control mb-3" placeholder="Email Address / Registration Number">
                        <input type="password" name="password" class="form-control mb-3" placeholder="Enter Password">
                        <button class="btn btn-success" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('master.footer')