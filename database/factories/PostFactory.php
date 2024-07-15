<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'user_id' => User::inRandomOrder()->first()->id,
            'post_text' => fake()->text,
            'ip_address' => fake()->ipv4,
            'start_date' => Carbon::now()->subDays(mt_rand(0, 4))->format('Y-m-d'),
            'end_date' => Carbon::now()->addDays(mt_rand(7, 31))->format('Y-m-d'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
