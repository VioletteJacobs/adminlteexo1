<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailsend extends Mailable
{
    use Queueable, SerializesModels;
    public $messageClient;
    public $emailClient;
    public $subjectEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->emailClient = $request->emailClient;
        $this->messageClient = $request->messageClient;
        $this->subjectEmail = $request->subjectEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->emailClient)->subject($this->subjectEmail)->view('template.templateMail')->with(["emailClient" => $this->emailClient, "emailMessage" => $this->messageClient]);
    }
}
