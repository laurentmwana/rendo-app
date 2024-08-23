<?php

namespace App\Events;

use App\Models\Appointment;
use Illuminate\Queue\SerializesModels;

class SendMessageAppointmentEvent
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(public Appointment $appointment) {}
}
