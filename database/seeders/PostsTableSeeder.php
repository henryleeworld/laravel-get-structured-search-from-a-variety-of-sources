<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $categories = Category::pluck('id');

        Post::factory()
            ->count(5)
            ->afterCreating(function (Post $post) use ($categories) {
                $post->categories()->sync(
                    $categories->random(mt_rand(0,3))
                );
            })
            ->create();

    }
}
