<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeadSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $lead;

    /**
     * Create a new message instance.
     */
    public function __construct($lead)
    {
        $this->lead = $lead;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Lead Inquiry')
                    ->view('emails.lead_submitted')
                    ->with(['lead' => $this->lead]);
    }
}
