<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class testMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $email;
    public $subject;
    public $messag;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailname,$emailemail, $emailsubject, $emailmessage)
    {
        $this->name = $emailname;
        $this->email = $emailemail;
        $this->subject = $emailsubject;
        $this->messag = $emailmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject($this->subject)
        ->view('emails.test');
    }
}
