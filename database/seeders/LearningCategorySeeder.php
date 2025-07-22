<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearningCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('learning_categories')->insert([
            ['name'=> 'Software Testing', 'slug' => 'software-testing'],
            ['name'=> 'Agile Testing', 'slug' => 'agile-testing'],
            ['name'=> 'ISTBQ Testing', 'slug' => 'istbq-testing'],
        ]);


    }
}
