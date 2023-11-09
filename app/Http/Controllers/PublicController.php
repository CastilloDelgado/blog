<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class PublicController extends Controller
{
    function home(){
        return Inertia::render('Home', [
            'latestPosts' => Post::with('tags', 'author')->latest()->take(3)->get()
        ]);
    }

    function allPosts(){
        $posts = Post::with('tags', 'author')->latest()->take(10)->get();
        return Inertia::render('AllPosts', [
            'posts' => $posts
        ]);
    }
}
