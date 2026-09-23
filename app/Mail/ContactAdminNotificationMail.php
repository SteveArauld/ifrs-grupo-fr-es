<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactAdminNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array{locale: string, name: string, email: string, phone: ?string, subject: string, message: string}  $data
     */
    public function __construct(public array $data) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->data['email']],
            subject: __('pages.mail.contact_admin.subject', [
                'name' => $this->data['name'],
            ], $this->data['locale']),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact.admin-notification',
            with: ['data' => $this->data],
        );
    }
}
