<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bangunan>
 */
class BangunanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namabangunan' => $this->faker->word(),
            'kodebangunan' => $this->faker->unique()->bothify('BGN-###'),
            'tanahid' => \App\Models\Tanah::factory(),
        ];
    }
}
