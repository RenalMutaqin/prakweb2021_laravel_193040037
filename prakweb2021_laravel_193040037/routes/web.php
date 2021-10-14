<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
        "title" => "anout",
        "name" => "Renal Mutaqin",
        "email" => "renalmutaqin8@gmail.com",
        "image" => "foto.jpeg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);



route :: get('posts/{slug}',[PostController::class, 'show']);