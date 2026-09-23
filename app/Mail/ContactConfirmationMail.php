<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array{locale: string, name: string, email: string, phone: ?string, subject: string, message: string}  $data
     */
    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('pages.mail.contact_confirmation.subject', [], $this->data['locale']),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact.confirmation',
            with: ['data' => $this->data],
        );
    }
}
