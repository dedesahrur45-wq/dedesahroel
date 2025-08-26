<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
    'namabarang' => fake()->word(),
    'kodeinventaris' => fake()->unique()->bothify('INV-###'),
    'kategoriid' => \App\Models\Kategori::factory(), // auto bikin kategori dan ambil id
    'ruanganid' => \App\Models\Ruangan::factory(),   // auto bikin ruangan dan ambil id
    'tahunpengadaan' => fake()->year(),
    'sumberdana' => fake()->randomElement(['APBD', 'Donasi', 'BOS', 'Rakyat']),
    'kondisi' => fake()->randomElement(['Baik', 'Rusak Ringan', 'Rusak Berat']),
        ];
    }
}
