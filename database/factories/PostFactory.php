<?php

namespace Database\Factories;

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
        $randomDate = fake()->dateTimeBetween('-2 week');
        return [
            'title' => fake()->sentence('6'),
            'image_url' => '../../images/concert-1.jpeg',
            'slug' => fake()->sentence(3),
            'excerpt' => fake()->paragraph(1),
            'body' => fake()->paragraph(10),
            'user_id' => 1,
            'video' => "https://www.youtube.com/embed/0TgwPfgTgZw?si=PX1Djgmieu_-FXQ_"
        ];
    }
}

