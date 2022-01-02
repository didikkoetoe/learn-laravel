<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => 'Post Category',
        'category' => $category->name,
        'categories' => $category->posts
    ]);
});

Route::view('/categories', 'categories', [
    'title' => 'Daftar Kategori',
    'categories' => Category::all()
]);
