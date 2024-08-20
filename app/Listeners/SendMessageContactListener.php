<?php

namespace App\Listeners;

use App\Mail\SendMessageContactMailer;
use App\Models\Contact;
use Illuminate\Mail\Mailer;
use App\Events\SendMessageContactEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessageContactListener
{
    /**
     * Create the event listener.
     */
    public function __construct(private Mailer $mail) {}

    /**
     * Handle the event.
     */
    public function handle(SendMessageContactEvent $event): void
    {

        $this->mail->send(new SendMessageContactMailer($event->contact));
    }
}
