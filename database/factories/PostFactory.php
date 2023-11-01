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
            'excerpt' => fake()->sentence(16),
            'body' => fake()->paragraph(10),
            'published_at' => $randomDate,
            'user_id' => 1
            // 'location' => fake()->sentence('6'),
            // 'address' => fake()->sentence('6'),
            // 'country' => fake()->country(), 
            // 'state' => fake()->state(),
            // 'city' => fake()->city(),
            // 'concert_date' => $randomDate,
            // 'band' => fake()->sentence('3')
        ];
    }
}
