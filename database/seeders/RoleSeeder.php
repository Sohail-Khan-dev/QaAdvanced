<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $roles = [
            [
                'name' => 'user',
                'description' => 'Regular user with limited access'
            ],
            [
                'name' => 'manager',
                'description' => 'Manager with access to dashboard'
            ],
            [
                'name' => 'admin',
                'description' => 'Administrator with full access'
            ],
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role['name']], $role);
        }
    }
}
