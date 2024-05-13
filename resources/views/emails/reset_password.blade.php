@component('mail::message')

<p> RESET {{ $user->name }}</p>

@component('mail::button',['url'=> url('reset', $user->remember_token)])
Reset
@endcomponent

<p>Thanks {{config('app.name')}}</p>
@endcomponent
