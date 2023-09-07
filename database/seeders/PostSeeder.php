<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Post::factory()->has(
            Comment::factory()->count(4)
        )->count(5)->create([
            'category_id' => Category::factory()
        ]);*/
        Post::factory()->has(
            Tag::factory()->count(5)
        )->count(5)->create();
    }
}
