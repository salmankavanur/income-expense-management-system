<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the roles exist before creating them
        if (Role::where('name', 'Super Admin')->doesntExist()) {
            Role::create(['name' => 'Super Admin']);
        }

        if (Role::where('name', 'Admin')->doesntExist()) {
            Role::create(['name' => 'Admin']);
        }

        if (Role::where('name', 'Accountant')->doesntExist()) {
            Role::create(['name' => 'Accountant']);
        }
    }
}
