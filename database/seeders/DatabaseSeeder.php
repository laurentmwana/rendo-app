<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Grade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Hourly;
use App\Models\Worker;
use App\Models\Requester;
use App\Models\Secretary;
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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => RoleUserEnum::ROLE_ADMIN->value,
        ]);

        Hourly::factory()->createMany([
            ['day' => 'Monday', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Tuesday', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Wednesday', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Thursday', 'start' => '08:30', 'end' => '16:30'],
            ['day' => 'Friday', 'start' => '08:30', 'end' => '13:30'],
            ['day' => 'Saturday', 'start' => null, 'end' => null, 'lock' => false],
            ['day' => 'Sunday', 'start' => null, 'end' => null, 'lock' => false],
        ]);

        $grades = [
            ['name' => 'Directeur Général'],
            ['name' => 'Vice Directeur Général'],
            ['name' => 'Directeur Ressourc Humaine'],
            ['name' => 'Directeur IT'],
        ];
        Grade::factory(4)->createMany($grades);

        Secretary::factory(10)->create()->each(function (Secretary $secretary) {
            User::factory()->create([
                'role' => RoleUserEnum::ROLE_SECRETARY->value,
                'secretary_id' => $secretary->id
            ]);
        });

        foreach (Grade::where('id', '>', 1)->get() as $grade) {
            for ($i = 0; $i < 3; $i++) {
                Worker::factory()->create(['grade_id' => $grade->id]);
            }
        }

        Worker::factory()->create(['grade_id' => Grade::find(1)->id]);
    }
}
