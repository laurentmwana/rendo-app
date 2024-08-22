<?php

use App\Models\Grade;
use App\Enums\RoleUserEnum;
use App\Models\Secretary;
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

function isVisitor(string $role): bool
{
    return $role === RoleUserEnum::ROLE_VISITOR->value;
}


function getSexies(): array
{
    return [
        'M' => 'Homme',
        'F' => 'Femme',
    ];
}

function getGrades(): SupportCollection
{
    return Grade::orderByDesc('updated_at')
        ->pluck('name', 'id');
}


function getSecretary(): SupportCollection
{
    return Secretary::orderByDesc('updated_at')
        ->pluck('name', 'id');
}
