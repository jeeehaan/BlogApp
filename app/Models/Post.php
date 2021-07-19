<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
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
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"]===$slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);

    }
}
