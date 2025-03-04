<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('topic_name')->insert([
            ['name' => 'Testing Fundamentals', 'description' => '', 'topic_id' =>'testing-fundamentals'],
            ['name' => 'Types of Testing', 'description' => '', 'topic_id' =>'type-of-testing'],
            ['name' => 'TestCase Development', 'description' => '', 'topic_id' =>'testcase-development'],
            ['name' => 'Testing Techniques', 'description' => '', 'topic_id' =>'testing-techniques'],
            ['name' => 'Test Management & Control', 'description' => '', 'topic_id' =>'test-management-control'],
            ['name' => 'Defects', 'description' => '', 'topic_id' =>'defects'],
            ['name' => 'Agile', 'description' => '', 'topic_id' =>'agile'],
            ['name' => 'Testing Different Domains', 'description' => '', 'topic_id' =>'testing-different-domains'],
            ['name' => 'WhiteBox Testing', 'description' => '', 'topic_id' =>'whitebox-testing'],
            ['name' => 'Performance Testing', 'description' => '', 'topic_id' =>'performancetesting'],
            ['name' => 'Advance Testing Topics', 'description' => '', 'topic_id' =>'advance-testing topics'],
        ]);
    }
}
