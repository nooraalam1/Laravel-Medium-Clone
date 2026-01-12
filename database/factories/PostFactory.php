<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            "title" => $this->faker->sentence,
            "content" => $this->faker->paragraph,
            "image" => $this->faker->imageUrl,
            "slug" => $this->faker->slug,
            "category_id" => Category::inRandomOrder()->first()->id,
            "user_id" => 1,
            "published_at" => $this->faker->dateTime(),
        ];
    }
}
