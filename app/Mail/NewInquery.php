<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewInquery extends Mailable
{
    use Queueable, SerializesModels;

    public $inquery;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inquery)
    {
        $this->inquery = $inquery;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('This is Testing Mail')->view('email.index');
    }
}
