<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DepartmentMember>
 */
class DepartmentMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'department_id' => fake()->numberBetween(1, 2000),
            'member_id' => fake()->numberBetween(1, 8000),
            'join_date' => fake()->dateTimeBetween('-19 years', '-10 years'),
        ];
    }
}
