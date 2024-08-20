<?php

use App\Models\Service;
use App\Models\Category;
use App\Enums\RoleUserEnum;
use Illuminate\Database\Eloquent\Collection;

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
    return $role === RoleUserEnum::ROLE_PREMIUM->value;
}



function getService(int $limit = 4, array $columns = ['id', 'name']): Collection
{
    return Service::limit($limit)->get($columns);
}

function getPluckCategories(): \Illuminate\Support\Collection
{
    return Category::orderByDesc('updated_at')
        ->pluck('name', 'id');
}
