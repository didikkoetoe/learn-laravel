<?php

use App\Http\Controllers\PostController;
use App\Models\{Category, User};
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'home', ['title' => 'Home']);

Route::view('/about', 'about', [
    'title' => 'About',
    'name' => 'Didik Prabowo',
    'age' => 19,
    'image' => 'contoh.png'
]);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::view('/categories', 'categories', [
    'title' => 'Daftar Kategori',
    'active' => 'categories',
    'categories' => Category::all()
]);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => 'Post Category : ' . $category->name,
        'active' => 'categories',
        'category' => $category->name,
        'posts' => $category->posts->load('author', 'category')
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'User Post : ' . $author->name,
        'active' => 'blog',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});
