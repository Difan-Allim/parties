<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organisation>
 */
class OrganisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->company(),
            'holding_date'=> fake() -> dateTimeBetween('-30 years', '-20 years'),
            'legal_id' => fake()->numberBetween(1, 100),
        ];
    }
}
