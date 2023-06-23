<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Paragraph;
use App\Models\PostImage;
use Inertia\Inertia;


class PostController extends Controller
{
    public function show($id){
        try{
            $post = Post::with(['author', 'tags', 'paragraphs', 'images'])->find($id);
            return Inertia::render('Post', [
                'post' => $post
            ]);
        } catch(Exception $e){
            return($e);
        }
    }

    public function store(Request $request){
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'state' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'concertDate' => 'required',
                'band' => 'required|string|max:255'
            ]);

            $file = $request->file('image');
            $imageUrl = Storage::put('', $file);

            $post = Post::create([
                'title' => $request->title,
                'location' => $request->location,
                'address' => $request->address,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'band' => $request->band,
                'concert_date' => $request->concertDate,
                'published_at' => $request->concertDate,
                'image_url' => $imageUrl,
                'user_id' => $request->user()->id
            ]);

            $postImages = $request->file('postImages');
            
            foreach($postImages as $postImageFile){
                $postImageUrl = Storage::put('', $postImageFile);
                PostImage::create([
                    'post_id' => $post->id,
                    'image_url' => $postImageUrl
                ]);
            }

            $paragraph = Paragraph::create([
                'text' => $request->text,
                'post_id' => $post->id
            ]);


            return($post);
        } catch(Exception $e){
            return($e);
        }
    }
}
