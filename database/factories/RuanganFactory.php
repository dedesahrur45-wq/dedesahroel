<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruangan>
 */
class RuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'namaruangan' => $this->faker->word(),
            'koderuangan' => $this->faker->unique()->bothify('RNG-###'),
            'luas' => \App\Models\Bangunan::factory(), // relasi otomatis
        ];
    }
}
