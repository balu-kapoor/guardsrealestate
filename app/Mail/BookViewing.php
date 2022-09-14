<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookViewing extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * @var array
     */
    public $formData;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('GuardsRealEstate Website: Booking Alert')
                    ->markdown('emails.bookviewing');
    }
}
