@component('mail::message')
<h1>This is your account OTP code</h1>
<p>You can use the following code to login your account:</p>

@component('mail::panel')
{{ $code }}
@endcomponent

<p>The allowed duration of the code is five minutes from the time the message was sent</p>
@endcomponent