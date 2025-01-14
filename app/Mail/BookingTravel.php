<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingTravel extends Mailable
{
    use Queueable, SerializesModels;
    public $travel;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($travel)
    {
        $this->travel = $travel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->travel->travel_type == "private") {
            return $this->view('email.booking-travel-confirmation', compact('travel'))
            ->from("contact@accessoslo.no", "Access Oslo")
            ->subject('Destination Oslo - Booking Confirmation');
        } else if ($this->travel->travel_type == "group") {
            return $this->view('email.booking-travel-confirmation', compact('travel'))
            ->from("contact@accessoslo.no", "Access Oslo")
            ->subject('Event & Group Travel - Booking Confirmation');
        }
        
    }
}
