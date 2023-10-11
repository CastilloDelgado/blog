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
            'location' => fake()->sentence('6'),
            'address' => fake()->sentence('6'),
            'country' => fake()->country(), 
            'state' => fake()->state(),
            'city' => fake()->city(),
            'image_url' => '../../images/concert-1.jpeg',
            'concert_date' => $randomDate,
            'user_id' => 1 ,
            'published_at' => $randomDate,
            'band' => fake()->sentence('3')
        ];
    }
}
