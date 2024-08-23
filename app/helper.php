<?php

use App\Models\Grade;
use App\Models\Hourly;
use App\Models\Worker;
use App\Models\Requester;
use App\Models\Secretary;
use App\Enums\RoleUserEnum;
use Illuminate\Support\Collection as SupportCollection;


/**
 * @param int $number
 * @return string
 */
function formatNumber(int $number): string
{
    if ($number < 1000) {
        return $number;
    } elseif ($number < 1000000) {
        return number_format($number / 1000, 1) . 'K';
    } elseif ($number < 1000000000) {
        return number_format($number / 1000000, 1) . 'M';
    } else {
        return number_format($number / 1000000000, 1) . 'B';
    }
}


function isAdmin(string $role): bool
{
    return $role === RoleUserEnum::ROLE_ADMIN->value;
}

/**
 * @param string $role
 * @return bool
 */
function isSecretary(string $role): bool
{
    return $role === RoleUserEnum::ROLE_SECRETARY->value;
}


function getSexies(): array
{
    return [
        'M' => 'Homme',
        'F' => 'Femme',
    ];
}

function getAges(int $start = 18, int $end = 70): array
{
    $ages = [];
    $year = (int)date('Y');
    for ($index = $start; $index <= $end; $index++) {
        $ages[($year - $index)] = "$index ans";
    }
    return $ages;
}

function getGrades(): SupportCollection
{
    return Grade::orderByDesc('updated_at')
        ->pluck('name', 'id');
}


function getSecretary(): array
{
    $secretaries = Secretary::all(['name', 'firstname', 'id']);

    $secretaryData = [];

    foreach ($secretaries as $secretary) {
        $value = "{$secretary->name} {$secretary->firstname}";
        $secretaryData[$secretary->id] = $value;
    }

    return $secretaryData;
}

function getRequester(): array
{
    $requesters = Requester::all(['name', 'firstname', 'id']);

    $requesterData = [];

    foreach ($requesters as $requester) {
        $value = "{$requester->name} {$requester->firstname}";
        $requesterData[$requester->id] = $value;
    }

    return $requesterData;
}

function getWorker(): array
{
    $workers = Worker::with(['grade'])->get();

    $workersData = [];

    foreach ($workers as $worker) {
        $value = "{$worker->name} {$worker->firstname} | {$worker->grade->name}";
        $workersData[$worker->id] = $value;
    }

    return $workersData;
}

function getHourly(): array
{
    $hourlies = Hourly::where('lock', '=', 1)
        ->get(['start', 'end', 'id', 'day']);

    $hourliesData = [];

    foreach ($hourlies as $hourly) {
        $value = "{$hourly->day} :  {$hourly->start} à {$hourly->end}";
        $hourliesData[$hourly->id] = $value;
    }

    return $hourliesData;
}
