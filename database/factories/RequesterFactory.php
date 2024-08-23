<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requester>
 */
class RequesterFactory extends Factory
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
            'sex' => $this->faker->randomElement(array_keys(getSexies())),
            'phone' => $this->faker->phoneNumber,
            'happy' => $this->faker->dateTimeInInterval(),
        ];
    }
}
