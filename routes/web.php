<?php

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

Route::get('/', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" =>"Hanggi Dwifa Honesqi",
        "email" =>"hanggihonesqi@gmail.com",
        "image" => "foto.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [[
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Hanggi Dwifa Honesqi",
        "body" => "Saya seorang programmer"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Astuti Pratiwi Rahmadhani",
        "body" => "Saya seorang penerjemah"
    ],
    ];
    return view('posts',[
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slup}', function ($slug) {
    $blog_posts = [[
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Hanggi Dwifa Honesqi",
        "body" => "Saya seorang programmer"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Astuti Pratiwi Rahmadhani",
        "body" => "Saya seorang penerjemah"
    ],
    ];
    $new_post = [];
  foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
  }
    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});