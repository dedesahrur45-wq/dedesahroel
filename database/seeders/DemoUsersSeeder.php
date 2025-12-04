<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DemoUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin account
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'nama' => 'Admin Demo',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        // Regular user account
        User::updateOrCreate(
            ['email' => 'user@example.com'],
            [
                'nama' => 'User Demo',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );
    }
}
