<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;

class DemoRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $validatedData;

    /**
     * Create a new message instance.
     *
     * @param array $validatedData
     * @return void
     */
    public function __construct(array $validatedData)
    {
        $this->validatedData = $validatedData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Demo Request - ' . $this->validatedData['demo_type'])
                    ->view('emails.demo-request')
                    ->with('data', $this->validatedData);
    }
}
