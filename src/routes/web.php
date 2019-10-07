<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/post/{post}', function (\App\Post $post) {
    $post->increment('views');
    return view('post', ['post' => $post]);
})->name('post');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/category/{slug}', function ($slug) {
    $post = \App\Category::where('slug', '=', $slug)->first()->post()->latest()->paginate(10);
    return view('blog', ['posts' => $post]);
})->name('category');

Route::get('/tags/{tag}', function ($slug) {
    $post = \App\Tag::where('slug', '=', $slug)->first()->post()->latest()->paginate(10);
    return view('blog', ['posts' => $post]);
})->name('tags');

Route::get('/author/{author}', function (\App\User $author) {
    $post = $author->post()->latest()->paginate(10);
    return view('blog', ['posts' => $post]);
})->name('posts.by.author');


