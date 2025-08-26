<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tanah>
 */
class TanahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namatanah' => $this->faker->word(),
            'kodetanah' => $this->faker->unique()->bothify('TNH-###'),
            'luas' => $this->faker->numberBetween(100, 1000) . ' m2',
            'nosertifikat' => $this->faker->unique()->bothify('SRT-#####'),
        ];
    }
}
