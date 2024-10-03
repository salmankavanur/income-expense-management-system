<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles if they do not exist
        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $accountantRole = Role::firstOrCreate(['name' => 'Accountant']);

        // Create Super Admin user
        $superAdmin = User::firstOrCreate([
            'email' => 'superadmin@example.com',
        ], [
            'name' => 'Super Admin',
            'password' => Hash::make('password123'), // Default password
        ]);
        $superAdmin->assignRole($superAdminRole);

        // Create Admin user
        $admin = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => Hash::make('password123'), // Default password
        ]);
        $admin->assignRole($adminRole);

        // Create Accountant user
        $accountant = User::firstOrCreate([
            'email' => 'accountant@example.com',
        ], [
            'name' => 'Accountant User',
            'password' => Hash::make('password123'), // Default password
        ]);
        $accountant->assignRole($accountantRole);
    }
}
