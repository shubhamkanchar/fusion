<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->data['token'] == 'message') {
            return $this->view('email.message', ['data' => $this->data])->subject('Message received from '.config('app.name', 'Fusion'));
        } elseif ($this->data['token'] == 'callback') {
            return $this->view('email.request', ['data' => $this->data])->subject('Callback request received');
        }elseif ($this->data['token'] == 'visit') {
            return $this->view('email.visit', ['data' => $this->data])->subject('Visit request received');
        }
    }
}
