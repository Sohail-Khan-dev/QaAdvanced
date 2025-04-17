<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogDetails>
 */
class ArticalDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'slug' => $this->faker->slug,
            'learning_category_id' => 1, // Default to Software Testing category
            'user_id' => 1, // Default to Admin User
            'tags' => $this->faker->words(3, true), // Generate 3 random words as tags
        ];
    }
}
