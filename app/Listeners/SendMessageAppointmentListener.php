<?php

namespace App\Listeners;

use App\Mail\SendMessageAppointmentMailer;
use Illuminate\Mail\Mailer;
use App\Events\SendMessageAppointmentEvent;

class SendMessageAppointmentListener
{
    /**
     * Create the event listener.
     */
    public function __construct(private Mailer $mailer) {}

    /**
     * Handle the event.
     */
    public function handle(SendMessageAppointmentEvent $event): void
    {
        $this->mailer->send(
            new SendMessageAppointmentMailer($event->appointment)
        );
    }
}
