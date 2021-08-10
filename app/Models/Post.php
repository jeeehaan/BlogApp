<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];

    protected $guarded = ["id"];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


// Post::create([
//     "title" => "Judul Kedua",
//     "category_id" => 2,
//     "slug" => "judul-kedua,
//     "excerpt" => "lorem kedua",
//     "body" => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ligula magna, facilisis ut pharetra in, elementum eu justo. Suspendisse nisi nulla, pretium sed sapien non, varius suscipit orci. Integer ornare augue id congue egestas. In porttitor condimentum blandit. Nunc diam orci, fringilla at tempor et, pulvinar in neque. Donec rutrum elit in suscipit venenatis. Vivamus eget ante ut turpis vestibulum dignissim et ut nisl. Etiam eget sapien in tortor consequat malesuada. Cras aliquam, purus molestie suscipit rutrum, velit diam maximus orci, in porta ipsum purus eu risus.</p>"
// ])
