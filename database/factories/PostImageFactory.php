<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostImage>
 */
class PostImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => 1,
            'image_url' => fake()->randomElement([
                '../../images/concert-1.jpeg',
                '../../images/concert-2.jpeg',
                '../../images/concert-3.jpeg',
                '../../images/concert-4.jpeg'
            ])
        ];
    }
}
