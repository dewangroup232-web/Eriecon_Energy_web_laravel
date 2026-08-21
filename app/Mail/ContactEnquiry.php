<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public readonly array $enquiry)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->enquiry['email'], $this->enquiry['name'])],
            subject: 'New website enquiry from '.$this->enquiry['name'],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'emails.contact-enquiry');
    }

    public function attachments(): array
    {
        return [];
    }
}
