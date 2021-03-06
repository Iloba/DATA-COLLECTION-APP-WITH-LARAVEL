@include('master.header')
<div class="main-section mt-5 mb-5 ">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                @include('master.errors')
                <div class="card p-3 shadow-sm">
                    <h2 class="text-center mb-5">Login</h2>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <input type="text" name="email" class="form-control mb-3" placeholder="Email Address / Registration Number" value="{{Old('email')}}">
                        <input type="password" name="password" class="form-control mb-3" placeholder="Enter Password">
                        <button class="btn btn-success mb-3" type="submit">Login</button> <br>
                        <a class="text-success" href="{{route('register')}}">Create an Account</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('master.footer')