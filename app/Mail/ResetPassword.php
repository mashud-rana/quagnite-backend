<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $username;

    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $url)
    {
        $this->username = $username;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(config('settings.mail_from_name').': Please Reset Your Password')
            ->view('email.auth.reset-password', ['username' => $this->username, 'url' => $this->url]);
    }
}
