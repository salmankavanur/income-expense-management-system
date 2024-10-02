<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // First, seed roles
        $this->call(RoleSeeder::class);

        // Then, seed users and assign roles
        $this->call(UserSeeder::class);
    }
}
