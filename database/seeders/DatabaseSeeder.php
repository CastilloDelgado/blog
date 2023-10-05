<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\Tag;
use App\Models\Paragraph;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Marco Castillo',
            'email' => 'marcocastillo1997@gmail.com',
            'image_url' => '../../images/profile.jpeg'
        ]);

        Tag::factory(10)->create();

        for($posts = 0; $posts < 10; $posts++){
            $post = Post::factory()->create();

            $tag = Tag::find(fake()->randomElement([1,2,3,4,5,6,7,8,9,10]));
            $post->tags()->save($tag);
            $tag = Tag::find(fake()->randomElement([1,2,3,4,5,6,7,8,9,10]));
            $post->tags()->save($tag);
            $tag = Tag::find(fake()->randomElement([1,2,3,4,5,6,7,8,9,10]));
            $post->tags()->save($tag);

            for($paragraphs = 0; $paragraphs < 5; $paragraphs++){
                $paragraph = Paragraph::factory()->create();
                $post->paragraphs()->save($paragraph);
            }
             
            for($images = 0; $images < 8; $images++){
                $postImage = PostImage::factory()->create();
                $post->images()->save($postImage);
            }   
        }
    }
}
