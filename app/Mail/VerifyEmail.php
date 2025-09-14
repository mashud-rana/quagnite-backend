<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;

    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($first_name, $url)
    {
        $this->first_name = $first_name;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(config('settings.mail_from_name').': Please Confirm Your Account Email')
            ->view('email.auth.email_verify');
    }
}
