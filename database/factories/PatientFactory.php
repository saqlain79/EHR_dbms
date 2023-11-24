<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'NID' => $this->faker->randomNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'gender' => 'null',
            'date_of_birth' => '2000-01-01',
            'phone' => '0123456789'
        ];
    }
}
