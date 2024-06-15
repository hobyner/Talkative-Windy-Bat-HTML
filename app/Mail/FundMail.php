<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FundMail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $receiver;
//     public $amount;

//     /**
//      * Create a new message instance.
//      */
//     public function __construct($receiver, $amount)
//     {
//         $this->receiver = $receiver;
//         $this->amount = $amount;
//     }

    
//     public function envelope(): Envelope
//     {
//         return new Envelope(
//             subject: 'Fund Alert',
//             from: 'noreply@angelinvestorhub.com',
//         );
//     }

//     /**
//      * Get the message content definition.
//      */
//     public function content(): Content
//     {
//         return new Content(
//             markdown: 'emails.fund',
//         );
//     }

//     /**
//      * Get the attachments for the message.
//      *
//      * @return array<int, \Illuminate\Mail\Mailables\Attachment>
//      */
//     public function attachments(): array
//     {
//         return [];
//     }
// }

{
    use Queueable, SerializesModels;

    public $receiver;
    public $amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($receiver, $amount)
    {
        $this->receiver = $receiver;
        $this->amount = $amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@angelInvestorhub.com', 'AngelInvestorhub')
                    ->subject('Deposit Notification')
                    ->markdown('emails.fund')
                    ->with([
                        'receiver' => $this->receiver,
                        'amount' => $this->amount,
                    ]);
    }
}

