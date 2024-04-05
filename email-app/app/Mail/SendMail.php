<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
    




    
    * Create a new message instance.
    
    
    */


    public $name = "";
    public $phone = "";
    public $address = "";
    public function __construct($name, $phone, $address)
    {
        //
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Mail',
        );
    }

    // public function build()
    // {
    //     return $this->subject('Test Subject')->view('send');
    // }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'send',
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
