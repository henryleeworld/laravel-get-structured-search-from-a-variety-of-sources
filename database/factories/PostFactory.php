<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Closure;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'user_id' => User::inRandomOrder()->first()->id,
            'post_text' => $this->faker->text,
            'ip_address' => $this->faker->ipv4,
            'start_date' => Carbon::now()->subDays(mt_rand(0, 4))->format('Y-m-d'),
            'end_date' => Carbon::now()->addDays(mt_rand(7, 31))->format('Y-m-d'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
