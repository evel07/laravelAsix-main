<?php

namespace Database\Factories;

use App\Models\Zenless;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Zenless>
 */
class ZenlessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'class' => fake()->name(),
            'abilities' => fake()->numberBetween(1, 100),
            'age' => fake()->numberBetween(1, 100),
            'role' => fake()->numberBetween(1, 100)
        ];
    }
}

