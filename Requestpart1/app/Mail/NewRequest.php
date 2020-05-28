<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $demande;

    /**

     *
     * @return void
     */
    public function __construct($data)
    {
        $this->demande = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.request');
    }
}
