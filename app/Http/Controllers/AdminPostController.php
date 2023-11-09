<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Tag;


class AdminPostController extends Controller
{
    function show(){
        return Inertia::render('Admin/AllPosts', [
            "posts" => Post::all()
        ]);
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
            $attributes['image_url'] = $request->file('image')->store('public/images');

            // Create post
            $post = Post::create($attributes);

            // Upload the rest of the images and attach them to the post
            $postImages = $request->file('postImages');
            
            foreach($postImages as $postImageFile){
                $postImageUrl = $postImageFile->store('public/images');
                PostImage::create([
                    'post_id' => $post->id,
                    'image_url' => $postImageUrl
                ]);
            }

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

    public function delete(Post $post){
        try{
            $result = $post->delete();
            return Redirect::route('admin.posts');
        } catch( Exception $e){
            return($e);
        }
    }
}
