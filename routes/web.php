<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\Tag;


// PUBLIC ROUTES
Route::get('/', [PublicController::class, 'home'])->name('home');

// POSTS
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.index');
Route::get('/posts', [PublicController::class, 'allPosts'])->name('posts.show');

// TAGS
Route::get('tags/{tag:name}', function(Tag $tag){
    return Inertia::render('AllPosts', [
        'posts' => $tag->posts
    ]);
});

// NEWSLETTER
Route::post('suscribe', [NewsletterController::class, 'suscribe'])->name('newsletter.suscribe');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/admin/profile/update-info', [ProfileController::class, 'updateInfo'])->name('admin.profile.update-info');
    Route::put('/admin/profile/update-image', [ProfileController::class, 'updateImage'])->name('admin.profile.update-image');
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');


    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/admin/posts', [AdminPostController::class, 'index'] )->name('admin.posts.index');
    Route::post('/admin/posts', [AdminPostController::class, 'store'])->name('admin.posts.store');
    Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
    Route::get('/admin/posts/{post}', [AdminPostController::class, 'edit'] )->name('admin.posts.edit');
    Route::put('/admin/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/{post}', [AdminPostController::class, 'delete'])->name('admin.post.delete');
});

require __DIR__.'/auth.php';
