@include('master.header')
<div class="main-section mt-3">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card p-3 shadow-sm">
                    <h2 class="text-center mb-5">Register</h2>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        <input type="text" name="username" class="form-control mb-3" placeholder="Username">
                        <input type="text" name="email" class="form-control mb-3" placeholder="Email Address">
                        <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number">
                        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                        <input type="password" name="password_confirm" class="form-control mb-3" placeholder="Confirm Password">
                        <button class="btn btn-success" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('master.footer')