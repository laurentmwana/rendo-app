<?php

use App\Models\Grade;
use App\Models\Service;
use App\Models\Category;
use App\Enums\RoleUserEnum;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Collection as SupportCollection;

function isAdmin(string $role): bool
{
    return $role === RoleUserEnum::ROLE_ADMIN->value;
}

/**
 * @param string $role
 * @return bool
 */
function isPremium(string $role): bool
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

function getGrades(): SupportCollection
{
    return Grade::orderByDesc('updated_at')
        ->pluck('name', 'id');
}
