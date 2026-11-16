<?php

namespace App\Mail;

use App\Models\Enrollment;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class EnrollmentAcceptedMail extends Mailable
{
    public function __construct(public Enrollment $enrollment) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Candidatura aceite',
        );
    }

    public function content(): Content
    {
        return new Content(
            text: 'emails.enrollment-accepted',
        );
    }
}
