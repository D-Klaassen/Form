<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;

    private $formInformation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formInformation)
    {
        //
        $this->formInformationSheet = $formInformation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.form', ['formInformation' => $this->formInformationSheet]);
    }
}
