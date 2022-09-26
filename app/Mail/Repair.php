<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Repair extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * @var array
     */
    public $formData;
    public $images;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($formData, $images)
    {
        $this->formData = $formData;
        $this->images = $images;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('GuardsRealEstate Website: Repair Request')
            ->markdown('emails.repair');
    }
}
