@component('mail::message')
# Hello {{ $receiver->name }},

This is to inform you that a sum of **${{ $amount }}** has been deposited into your wallet. Your new wallet balance is **${{ $receiver->balance}}**.

@component('mail::button', ['url' => url('https://www.angelinvestorhub.com/wallet')])
View Wallet
@endcomponent


Regards,<br>
Angelinvestorhub
@endcomponent
