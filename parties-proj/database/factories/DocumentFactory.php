<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> word,
            'since_date' => fake() -> dateTimeBetween('-5 years', '+10 years'),
            'purpose_id' => fake() -> numberBetween(1, 100),
            'organisation_id' => fake() -> numberBetween(1, 500),
            'user_id' => 1
        ];
    }
}
