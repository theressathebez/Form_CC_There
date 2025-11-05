<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: "uwu@there.vexel.my.id",
            subject: $this->data['subject']
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emailtemplate',
            with: [
                'name' => $this->data['name'],
                'email' => $this->data['email'] ?? '',
                'birth_of_date' => $this->data['birth_of_date'] ?? '',
                'content' => $this->data['content'] ?? ''
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}