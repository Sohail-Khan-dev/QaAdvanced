<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    \DB::table('quizzes')->insert([
        [
            'title' => 'General Knowledge Quiz',
            'description' => 'A quiz to test your general knowledge.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Science Quiz',
            'description' => 'A quiz to test your knowledge in science.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'Math Quiz',
            'description' => 'A quiz to test your math skills.',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}
