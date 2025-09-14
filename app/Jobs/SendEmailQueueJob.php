<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailQueueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $send_mail;

    protected $mail_object;

    /**
     * Create a new job instance.
     */
    public function __construct($send_mail, $mail_object)
    {
        $this->send_mail = $send_mail;
        $this->mail_object = $mail_object;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->send_mail)->send($this->mail_object);
    }
}
