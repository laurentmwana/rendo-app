<?php

namespace App\Http\Controllers\Secretary;

use App\Events\SendMessageAppointmentEvent;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;

class SecretaryApprovedAppointmentController extends Controller
{
    public function __invoke(string $id): RedirectResponse
    {
        $appointment = Appointment::with([
            'hourly',
            'requester',
            'requester.user',
            'worker',
        ])->findOrFail($id);

        $approved = $appointment->approved ? false : true;


        $isSendMessage = $appointment->send_message_approved;

        if ($approved && (null !== $isSendMessage && !$isSendMessage)) {
            $appointment->update([
                'approved' => $approved,
                'send_message_approved' => $approved,
            ]);

            event(new SendMessageAppointmentEvent($appointment));
        }

        if (!$approved && (null !== $isSendMessage && $isSendMessage)) {
            $appointment->update([
                'approved' => $approved,
                'send_message_approved' => null,
            ]);

            event(new SendMessageAppointmentEvent($appointment));
        }

        if ($isSendMessage === null) {
            $appointment->update([
                'approved' => $approved,
            ]);
        }

        return redirect()
            ->route('&appointment.index')
            ->with('success', 'rendez-vous mis à jour');
    }
}
