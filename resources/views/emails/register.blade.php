@component('mail::message')

    <p> HELLO {{ $user->name }}</p>

    @component('mail::button',['url'=> url('verify', $user->remember_token)])
        Verify
    @endcomponent

<p>Thanks for signing up on {{config('app.name')}}</p>
@endcomponent
