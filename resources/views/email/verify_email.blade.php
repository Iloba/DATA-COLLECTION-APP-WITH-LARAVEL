@component('mail::message')
Hi, {{$user->username}}, Please Verify your email

Click the link below to verify your email.


@component('mail::button', ['url' => route('verify_email', $user), 'color', 'success'])
Verify Email 
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
