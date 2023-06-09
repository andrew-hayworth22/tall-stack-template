<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run(): void {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
        ])->assignRole('Super Admin');

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
        ])->assignRole('User');
    }
}
