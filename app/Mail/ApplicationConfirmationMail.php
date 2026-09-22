<?php

namespace App\Mail;

use App\Models\ApplicationSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ApplicationSubmission $submission) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('pages.mail.confirmation.subject', [], $this->submission->locale),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.applications.confirmation',
            with: ['submission' => $this->submission],
        );
    }
}
