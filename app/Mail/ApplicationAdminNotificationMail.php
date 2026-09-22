<?php

namespace App\Mail;

use App\Models\ApplicationSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationAdminNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ApplicationSubmission $submission) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->submission->email],
            subject: __('pages.mail.admin.subject', [
                'name' => $this->submission->first_name.' '.$this->submission->name,
            ], $this->submission->locale),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.applications.admin-notification',
            with: ['submission' => $this->submission],
        );
    }
}
