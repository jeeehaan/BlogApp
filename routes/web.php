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
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    //mengirim data ke view
    return view ('about', [
        "title" => "About",
        "name" => "Jessy Hanifiah",
        "email" => "jessyhanifiah@mhs.unsyiah.ac.id",
        "image" => "jessy.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jessy Hanifiah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolore temporibus vel earum officia dolorum illo ad nobis non quaerat, eligendi, id vero eius sed maiores nisi modi obcaecati et quam aliquam nesciunt inventore amet ipsa dolor? Reiciendis, aperiam iure omnis ratione explicabo maiores voluptas ipsa animi, asperiores obcaecati velit nemo veritatis molestias cumque sapiente nulla ipsum eligendi voluptatum ullam quas illo sequi. Repellat rerum eaque expedita, accusamus quo minus cupiditate quibusdam sit odio minima perspiciatis, nam sapiente repudiandae tenetur!"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jeeehaan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolore temporibus vel earum officia dolorum illo ad nobis non quaerat, eligendi, id vero eius sed maiores nisi modi obcaecati et quam aliquam nesciunt inventore amet ipsa dolor? Reiciendis, aperiam iure omnis ratione explicabo maiores voluptas ipsa animi, asperiores obcaecati velit nemo veritatis molestias cumque sapiente nulla ipsum eligendi voluptatum ullam quas illo sequi. Repellat rerum eaque expedita, accusamus quo minus cupiditate quibusdam sit odio minima perspiciatis, nam sapiente repudiandae tenetur!"
        ],

    ];

    return view ('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jessy Hanifiah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolore temporibus vel earum officia dolorum illo ad nobis non quaerat, eligendi, id vero eius sed maiores nisi modi obcaecati et quam aliquam nesciunt inventore amet ipsa dolor? Reiciendis, aperiam iure omnis ratione explicabo maiores voluptas ipsa animi, asperiores obcaecati velit nemo veritatis molestias cumque sapiente nulla ipsum eligendi voluptatum ullam quas illo sequi. Repellat rerum eaque expedita, accusamus quo minus cupiditate quibusdam sit odio minima perspiciatis, nam sapiente repudiandae tenetur!"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jeeehaan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia dolore temporibus vel earum officia dolorum illo ad nobis non quaerat, eligendi, id vero eius sed maiores nisi modi obcaecati et quam aliquam nesciunt inventore amet ipsa dolor? Reiciendis, aperiam iure omnis ratione explicabo maiores voluptas ipsa animi, asperiores obcaecati velit nemo veritatis molestias cumque sapiente nulla ipsum eligendi voluptatum ullam quas illo sequi. Repellat rerum eaque expedita, accusamus quo minus cupiditate quibusdam sit odio minima perspiciatis, nam sapiente repudiandae tenetur!"
        ],

    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"]===$slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
