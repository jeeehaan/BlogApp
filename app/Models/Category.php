<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// Post::create([
// 	"title" => "Judul Pertama",
// 	"category_id" => 1,
// 	"slug"=> "judul-pertama",
// 	"excerpt" => "Lorem ipsum dolor sit amet",
// 	"body" => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tincidunt massa quis nisl vestibulum posuere. Maecenas auctor vitae augue sit amet dapibus. Aliquam congue lacinia leo nec imperdiet. Mauris tempor lacus nec tincidunt consectetur. Vivamus facilisis mattis risus, a faucibus ipsum viverra et. Praesent lobortis neque a mauris porttitor pretium quis at massa. Cras quis est leo. Suspendisse tincidunt lobortis lectus non ultricies. Suspendisse facilisis ullamcorper finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce in nunc et felis tincidunt iaculis at a orci. Suspendisse potenti. Donec ornare vulputate orci vel ultrices. Sed sed.</p>"
// ]);
