<?php

namespace App\Mail;

use App\Models\SubjectMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailsend extends Mailable
{
    use Queueable, SerializesModels;

    public $messageClient;
    public $email;
    public $subjectEmail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {

        $subject = SubjectMail::find($request->subject_mails_id);
        $this->email = $request->email;
        $this->messageClient = $request->messageClient;
        $this->subjectEmail = $subject->subject;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->subjectEmail);
        return $this->from($this->email)->subject($this->subjectEmail)->view('template.templateMail')->with(["emailClient" => $this->email, "emailMessage" => $this->messageClient]);
    }
}
