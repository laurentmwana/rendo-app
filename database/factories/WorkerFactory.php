<?php

namespace Database\Factories;

use App\Generator\Token;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'firstname' => $this->faker->firstname,
            'lastname' => $this->faker->lastname,
            'gender' => $this->faker->randomElement(array_keys(getSexies())),
            'phone' => $this->faker->phoneNumber,
            'registration_number' => Token::alpha(8),
            'happy' => $this->faker->dateTimeInInterval(),
        ];
    }
}
