<?php

namespace App\Http\Controllers\Secretary;

use App\Search\SearchBar;
use App\Models\Appointment;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Secretary\AppointmentRequest;

class SecretaryAppointmentController extends Controller
{
    public function index(SearchBar $searchBar): View
    {
        return view('secretary.appointment.index', [
            'appointments' => $searchBar->appointment()
        ]);
    }

    public function create(): View
    {
        return view('secretary.appointment.new', [
            'appointment' => (new Appointment())
        ]);
    }

    public function store(AppointmentRequest $request): RedirectResponse
    {
        Appointment::create([
            ...$request->validated(),
            'secretary_id' => Auth::user()->secretary_id
        ]);

        return redirect()
            ->route('&appointment.index')
            ->with('success', 'rendez-vous ajouté');
    }

    public function show(Appointment $appointment): View
    {
        return view('secretary.appointment.show', [
            'appointment' => $appointment
        ]);
    }

    public function edit(Appointment $appointment): View
    {
        return view('secretary.appointment.edit', [
            'appointment' => $appointment
        ]);
    }
    public function update(
        AppointmentRequest $request,
        Appointment $appointment
    ): RedirectResponse {
        $appointment->update($request->validated());

        return redirect()
            ->route('&appointment.index')
            ->with('success', 'rendez-vous edité');
    }

    public function destroy(Appointment $appointment): RedirectResponse
    {
        $appointment->delete();

        return redirect()
            ->route('&appointment.index')
            ->with('success', 'rendez-vous supprimé');
    }
}
