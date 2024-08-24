<?php

namespace App\Http\Controllers;

use App\Models\Requester;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\NewReservationRequest;

class ReservationController extends Controller
{

    public function index(): View
    {
        return view('reservation.index');
    }

    public function create(): View
    {
        return view('reservation.create', [
            'requester' => (new Requester()),
            'appoinment' => (new Appointment()),
        ]);
    }

    public function store(NewReservationRequest $request): RedirectResponse
    {
        $requester = Requester::create([
            'name' => $request->validated('name'),
            'firstname' => $request->validated('firstname'),
            'lastname' => $request->validated('lastname'),
            'gender' => $request->validated('gender'),
            'happy' => $request->validated('happy'),
            'phone' => $request->validated('phone'),
            'email' => $request->validated('email'),
            'registration_number' => $request->validated('registration_number'),
        ]);

        $requester->appointments()->create([
            'reason' => $request->validated('reason'),
            'worker_id' => $request->validated('worker_id'),
            'requester_id' => $requester->id,
        ]);

        return redirect()->route('.reservation.index')
            ->with('success', "votre demande a été envoyé");
    }
}
