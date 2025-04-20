<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get admin role
        $adminRole = Role::where('name', 'admin')->first();

        if (!$adminRole) {
            echo "Admin role not found. Please run the RoleSeeder first.\n";
            return;
        }

        // Create admin user
        User::firstOrCreate(
            ['email' => 'admin@qaadvance.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('passwords'),
                'email_verified_at' => now(),
                'role_id' => $adminRole->id,
            ]
        );

        echo "Admin user created successfully.\n";
    }
}
