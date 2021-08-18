<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;
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
    return view ('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    //mengirim data ke view
    return view ('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Jessy Hanifiah",
        "email" => "jessyhanifiah@mhs.unsyiah.ac.id",
        "image" => "jessy.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => "Categories",
        'active' => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => "categories",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});


