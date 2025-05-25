<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;


class SendActivationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $user;
    public $token;
     public function __construct($user,$token){
        $this->user = $user;
        $this->token = $token;
     }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('huynhkhanhhoa2010@gmail.com', 'Admin'),
            subject: 'Kích hoạt tài khoản',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.activation',
            with:[
                'user' => $this->user->email,
                'token' => $this->user->active_token
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
