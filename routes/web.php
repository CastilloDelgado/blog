<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// PUBLIC ROUTES
Route::get('/', [PublicController::class, 'home'])->name('home');

// POSTS
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts', [PublicController::class, 'allPosts'])->name('posts.show');

// TAGS
Route::get('tags/{tag:name}', function(Tag $tag){
    return Inertia::render('AllPosts', [
        'posts' => $tag->posts
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Posts Section
    Route::get('/admin/posts', [AdminPostController::class, 'show'] )->name('admin.posts');
    Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [AdminPostController::class, 'store'])->name('posts.store');
    Route::delete('/admin/posts/{id}', [AdminPostController::class, 'delete'])->name('post.delete');
});

require __DIR__.'/auth.php';
