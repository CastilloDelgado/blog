<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\Tag;
use Illuminate\Support\Facades\Redirect;


class AdminPostController extends Controller
{
    function show(){
        return Inertia::render('Admin/AllPosts', [
            "posts" => Post::with(['author', 'tags', 'images'])->orderByDesc('created_at')->get()
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

            return Redirect::route('admin.posts.show');
        } catch(Exception $e){
            return($e);
        }
    }

    public function delete($id){
        try{
            $result = Post::find($id)->delete();
            return Redirect::route('admin.posts.show');
        } catch( Exception $e){
            return($e);
        }
    }
}
