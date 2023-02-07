<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
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
            'event_date' => fake() -> dateTimeBetween('-5 years', '+10 years'),
            'money' => fake() -> randomFloat(2, 10, 100),
            'count_m' => fake() -> randomNumber(5, true),
            'type_id' => fake() -> numberBetween(1, 100),
            'organisation_id' => fake() -> numberBetween(1, 1000),
            'user_id' => fake() -> numberBetween(1, 10),
        ];
    }
}
