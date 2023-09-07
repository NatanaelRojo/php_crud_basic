<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'title' => fake()->title(),
            'overview' => fake()->sentence(),
            'content' => fake()->text(),
        ];
    }

    public function configure(): static
    {
        return $this->afterCreating(function(Post $post) {
            Comment::factory()->count(5)->create([
                'post_id' => $post->id
            ]);
        });
    }
}
