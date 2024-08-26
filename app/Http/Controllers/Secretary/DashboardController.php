<?php

namespace App\Http\Controllers\Secretary;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Approved;
use App\Models\Requester;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('secretary.dashboard.index', $this->getParams());
    }

    private function getParams(): array
    {
        $reservations = Appointment::all(['id']);

        $approvedCount = Approved::whereIn(
            'appointment_id',
            $reservations->pluck('id')->toArray()
        )->count();

        $reservationCount = $reservations->count();

        return [
            'reservationCount' => $reservationCount,
            'requesterCount' => Requester::count(),
            'reservationApprovedCount' => $approvedCount,
            'reservationNoApprovedCount' => $reservationCount - $approvedCount,
        ];
    }
}
