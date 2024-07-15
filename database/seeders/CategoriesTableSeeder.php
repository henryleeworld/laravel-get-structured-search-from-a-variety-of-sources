<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $categories = [
            'Y7', 'Y8', 'Y9', 'Y10', 'Y11', 'Y12', 'Staff'
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
