<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blog_category_id' => BlogCategory::factory(),
            'name' => $this->faker->sentence(3),
            'small_text' => $this->faker->paragraph(1),
            'long_text' => $this->faker->text(500),
            'image' => null,
            'is_active' => $this->faker->boolean(80),
            'is_popular' => $this->faker->boolean(30), // 30% популярны
        ];
    }
}
