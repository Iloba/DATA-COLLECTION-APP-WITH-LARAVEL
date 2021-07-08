@component('mail::message')
Hi, {{$user->username}}, Please Verify your email

Click the link below to verify your email.


@component('mail::button', ['url' => 'http://127.0.0.1:8000/verify/email/{{$user->reg_number}}', 'color', 'success'])
Verify Email 
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
