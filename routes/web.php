<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Files;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, "index"]
    // $posts = Post::latest();

    // if (request('search')) {
    //     $posts
    //         ->where('title', 'like', '%' . request('search') - '%')
    //         ->orWhere('body', 'like', '%' . request('search') - '%');
    // }
    /* return view('posts', [
        'posts' => Post::latest('published_at')->with(['category', 'author'])->get(),
        'categories' => Category::all()
    ]); */
)->name('home');


Route::get('/posts/{post:slug}', [PostController::class, "show"])->name('post');

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        "posts" => $category->posts,
        'categories' => Category::all()
        ]);
})->name('category');

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        "posts" => $author->posts,
        'categories' => Category::all()
        ]);
});



Route::get('/hello', function () {
    return 'hello world!';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
