<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'number' => fake()->postcode(),
            'phone_number' => fake()->e164PhoneNumber(),
            'address' => fake()->streetAddress(),
            'city_id' => fake()->numberBetween(1, 100),
            'organisation_id' => fake()->numberBetween(1, 500)
        ];
    }
}
