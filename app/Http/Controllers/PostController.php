<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Paragraph;
use App\Models\PostImage;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;


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
}
