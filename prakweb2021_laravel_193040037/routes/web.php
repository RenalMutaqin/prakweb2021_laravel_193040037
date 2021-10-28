<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

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
        "title" => "home",
        "active" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "anout",
        "active" => "about",
        "name" => "Renal Mutaqin",
        "email" => "renalmutaqin8@gmail.com",
        "image" => "foto.jpeg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);



Route :: get('posts/{post:slug}',[PostController::class, 'show']);

Route :: get('/categories', function(){
    return view('cayegory', [
        'title'=> 'Post Categories',
        "active" => "categories",
        'categories'=> Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title'=>"Post By Category : $category->name",
        "active" => "categories",
        'posts'=> $category->posts->load('category', 'author')
    ]);
});

route::get('/authors/{author:username}' , function(User $author){
    return view('posts', [
        'title'=> "Post By Author : $author->name",
        "active" => "post",
        'posts'=> $author->posts->load('category','author')
    ]);
});