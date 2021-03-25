<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendRegister extends Mailable
{
    public $registerConfirme;
    public $name;
    public $email;
    public $password;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->password = $data["password"];

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("viovio@vio")
        ->view('template.templateMailRegister')
        ->subject("Inscription")
        ->with(["email" => $this->email, "name"=> $this->name, "password"=>$this->password ]);
    }
}
