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
        // Get the ID of the Software Testing category (assuming it's the first one with ID 1)
        $softwareTestingCategoryId = 1;

        DB::table('topic_name')->insert([
            ['name' => 'Testing Fundamentals', 'description' => '', 'topic_id' =>'testing-fundamentals', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Types of Testing', 'description' => '', 'topic_id' =>'type-of-testing', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'TestCase Development', 'description' => '', 'topic_id' =>'testcase-development', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Testing Techniques', 'description' => '', 'topic_id' =>'testing-techniques', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Test Management & Control', 'description' => '', 'topic_id' =>'test-management-control', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Defects', 'description' => '', 'topic_id' =>'defects', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Agile', 'description' => '', 'topic_id' =>'agile', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Testing Different Domains', 'description' => '', 'topic_id' =>'testing-different-domains', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'WhiteBox Testing', 'description' => '', 'topic_id' =>'whitebox-testing', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Performance Testing', 'description' => '', 'topic_id' =>'performancetesting', 'learning_category_id' => $softwareTestingCategoryId],
            ['name' => 'Advance Testing Topics', 'description' => '', 'topic_id' =>'advance-testing topics', 'learning_category_id' => $softwareTestingCategoryId],
        ]);
    }
}
