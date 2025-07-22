<?php

namespace Database\Seeders;

use App\Models\BlogDetails;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run the role seeder first
        $this->call(RoleSeeder::class);

        // Then create the admin user
        $this->call(AdminSeeder::class);

        // Uncomment these if needed
        // $this->call([
        //     LearningCategorySeeder::class,
        //     TopicNameSeeder::class,
        // ]);
    }
}
