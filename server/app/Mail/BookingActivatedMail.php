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

    public function __construct(array $details, string $qrCodePath)
    {
        $this->details = $details;
        $this->qrCodePath = $qrCodePath;
    }

    public function build()
    {
        return $this->subject('Your Booking is Activated')
                    ->view('emails.bookingActivated')
                    ->with('details', $this->details)
                    ->attach($this->qrCodePath);
    }
}
