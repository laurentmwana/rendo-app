<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Network;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Formation;
use App\Enums\RoleUserEnum;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => RoleUserEnum::ROLE_ADMIN->value,
        ]);
    }
}
