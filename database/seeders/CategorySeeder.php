<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->has(
            Post::factory()->count(3)
        )->create();
    }
}