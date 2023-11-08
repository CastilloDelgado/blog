<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function(){
    // return Inertia::render('Home', [
    //     'highlightPosts' => Post::with('tags', 'author')->inRandomOrder()->take(7)->get(),
    //     'bestPosts' => Post::with('tags', 'author')->inRandomOrder()->take(4)->get(),
    //     'randomPosts' => Post::with('tags', 'author')->inRandomOrder()->take(4)->get(),
    //     'latestPosts' => Post::with('tags', 'author')->latest()->take(4)->get(),
    //     'tags' => Tag::all()
    // ]);
    return Inertia::render('Home', [
        'latestPosts' => Post::with('tags', 'author')->latest()->take(3)->get()
    ]);
})->name('home');


// POSTS
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts', function(){
    $posts = Post::with('tags', 'author')->latest()->take(10)->get();
    return Inertia::render('AllPosts', [
        'posts' => $posts
    ]);
})->name('posts.show');
Route::delete('/admin/posts/{id}', [PostController::class, 'delete'])->name('post.delete');

// TAGS
Route::get('tags/{tag:name}', function(Tag $tag){
    return Inertia::render('AllPosts', [
        'posts' => $tag->posts
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Admin Posts Section
    Route::get('/admin/posts', function(){
        return Inertia::render('AllPosts', [
            "posts" => Post::all()
        ]);
    })->name('admin.posts');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('posts.create');
});





require __DIR__.'/auth.php';
