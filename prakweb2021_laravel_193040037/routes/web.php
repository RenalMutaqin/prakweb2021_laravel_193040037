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
    return view('home',[
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Renal Mutaqin",
        "email" => "renalmutaqin8@gmail.com",
        "image" => "foto.jpeg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama" ,
            "author" => "Renal Mutaqin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis 
            saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua" ,
            "author" => "Renal Mutaqin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere
            corporis saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
    ];
    
    return view('posts',[
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});



route :: get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama" ,
            "author" => "Renal Mutaqin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis 
            saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua" ,
            "author" => "Renal Mutaqin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis 
            saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
        ],
    ];
    $new_post =[];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        "title" => "single post",
        "post" => $new_post
    ]);
});