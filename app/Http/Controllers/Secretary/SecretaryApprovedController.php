<?php

namespace App\Http\Controllers\Secretary;

use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Exceptions\IsApprovedException;
use App\Events\SendMessageAppointmentEvent;
use App\Http\Requests\Secretary\ApprovedRequest;

class SecretaryApprovedController extends Controller
{
    public function __invoke(ApprovedRequest $request, string $id): RedirectResponse
    {
        $appointment = Appointment::with([
            'requester',
            'worker',
            'approved'
        ])->findOrFail($id);

        if ($appointment->approved !== null) {
            throw new IsApprovedException();
        }

        $appointment->approved()
            ->create($request->validated());

        event(new SendMessageAppointmentEvent($appointment->refresh()));

        return redirect()
            ->route('&appointment.index')
            ->with('success', 'rendez-vous approuvé');
    }
}
