<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MemberWelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $action_url = 'http://bit.ly/RALFCommunity';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         $this->subject('Registration Successful')
         ->view('emails.welcomemember')->with(['action_url' => $this->action_url]);
         return $this;
    }
}
