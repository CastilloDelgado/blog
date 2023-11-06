<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Paragraph;
use App\Models\PostImage;
use Inertia\Inertia;


class PostController extends Controller
{
    public function show($id){
        try{
            $post = Post::with(['author', 'tags', 'images'])->find($id);
            return Inertia::render('Post', [
                'post' => $post
            ]);
        } catch(Exception $e){
            return($e);
        }
    }

    public function create(){
        try{
            $tags = Tag::all();
            return Inertia::render('CreatePost', [
                "tags" => $tags
            ]);
        } catch(Exception $e){
            return($e);
        }
    }

    public function store(Request $request){
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'slug' => 'required|string|max:255',
                'excerpt' => 'required|string',
                'video' => 'required|string',
                'body' => 'required|string',
                'tags' => 'required|array'
            ]);

            $attributes = [
                'title' => $request["title"],
                'video' => $request["video"],
                'slug' => $request["slug"],
                'excerpt' => $request["excerpt"],
                'body' => $request["body"],
            ];

            $attributes['user_id'] =  $request->user()->id;

            // Upload main image file
            $attributes['image_url'] = $request->file('image')->store('images');

            // Create post
            $post = Post::create($attributes);

            // Upload the rest of the images and attach them to the post
            $postImages = $request->file('postImages');
            
            foreach($postImages as $postImageFile){
                $postImageUrl = $postImageFile->store('images');
                PostImage::create([
                    'post_id' => $post->id,
                    'image_url' => $postImageUrl
                ]);
            }

            // // Creating paragraphs and attach them to the post
            // $paragraph = Paragraph::create([
            //     'text' => $request->text,
            //     'post_id' => $post->id
            // ]);

            // Attaching tags to the post
            foreach($request->tags as $tagId){
                $tag = Tag::find($tagId);
                $post->tags()->save($tag);
            }

            return($post);
        } catch(Exception $e){
            return($e);
        }
    }
}
