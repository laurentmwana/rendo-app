<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hourly;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Network;
use App\Models\Category;
use App\Models\Formation;
use App\Enums\RoleUserEnum;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'role' => RoleUserEnum::ROLE_ADMIN->value,
        // ]);



        Hourly::factory()->createMany([
            ['day' => 'Lundi', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Mardi', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Mercredi', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Jeudi', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Vendredi', 'start' => '08:30', 'end' => '13:30'],
        ]);
    }
}
