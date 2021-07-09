@include('master.header')
<div class="main-section">
    @include('master.errors')
    @if (session()->has('user'))
       {{session('user')->username}}
    @endif
</div>
@include('master.footer')