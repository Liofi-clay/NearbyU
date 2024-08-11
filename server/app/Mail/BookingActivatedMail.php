<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingActivatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $qrCodePath;

    public function __construct($details, $qrCodePath)
    {
        $this->details = $details;
        $this->qrCodePath = $qrCodePath;
    }

    public function build()
    {
        return $this->view('emails.booking_activated')
                    ->subject('Booking Activated')
                    ->attach($this->qrCodePath, [
                        'as' => 'qr_code.png',
                        'mime' => 'image/png',
                    ]);
    }
}