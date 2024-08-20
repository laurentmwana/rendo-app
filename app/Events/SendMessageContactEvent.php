<?php

namespace App\Events;

use App\Models\Contact;
use Illuminate\Queue\SerializesModels;

class SendMessageContactEvent
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Contact $contact) {}
}
