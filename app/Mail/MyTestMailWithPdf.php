<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyTestMailWithPdf extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($details, $pdf)
    {
        $this->details = $details;
        $this->pdf = $pdf;
    }

    public function build()
    {
        $name = date('y-m-d h-i-s') . '.pdf';
        return
            $this->subject('Mail With PDf Tester')
            ->view('emails.myTestMail', [
                'details' => $this->details
            ])->attachData($this->pdf->output(), $name);
    }
}
