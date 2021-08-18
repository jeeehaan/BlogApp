<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Jessy Hanifiah',
        //     'email' => 'jessyhanifiah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Jessy Hanif Bribisetya',
        //     'email' => 'jessyhanifbribisetya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'

        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laboriosam similique enim ipsum! Numquam ea quo quibusdam, explicabo atque, distinctio porro et asperiores eos pariatur quia neque ullam id blanditiis. Dolore, doloremque accusantium temporibus earum reprehenderit cupiditate aliquid vero doloribus non quas! Rerum tenetur quis exercitationem eius provident odit est iste eveniet vitae commodi consectetur obcaecati, voluptatum dicta ullam labore ab tempora consequuntur voluptates, neque consequatur. Similique corrupti, consectetur blanditiis quaerat laboriosam non sed esse? Et, accusantium praesentium. Consectetur perspiciatis soluta, vel porro eveniet sequi, optio illo sint necessitatibus ex est nobis nemo! Esse hic incidunt aspernatur nobis placeat tempore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laboriosam similique enim ipsum! Numquam ea quo quibusdam, explicabo atque, distinctio porro et asperiores eos pariatur quia neque ullam id blanditiis. Dolore, doloremque accusantium temporibus earum reprehenderit cupiditate aliquid vero doloribus non quas! Rerum tenetur quis exercitationem eius provident odit est iste eveniet vitae commodi consectetur obcaecati, voluptatum dicta ullam labore ab tempora consequuntur voluptates, neque consequatur. Similique corrupti, consectetur blanditiis quaerat laboriosam non sed esse? Et, accusantium praesentium. Consectetur perspiciatis soluta, vel porro eveniet sequi, optio illo sint necessitatibus ex est nobis nemo! Esse hic incidunt aspernatur nobis placeat tempore?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laboriosam similique enim ipsum! Numquam ea quo quibusdam, explicabo atque, distinctio porro et asperiores eos pariatur quia neque ullam id blanditiis. Dolore, doloremque accusantium temporibus earum reprehenderit cupiditate aliquid vero doloribus non quas! Rerum tenetur quis exercitationem eius provident odit est iste eveniet vitae commodi consectetur obcaecati, voluptatum dicta ullam labore ab tempora consequuntur voluptates, neque consequatur. Similique corrupti, consectetur blanditiis quaerat laboriosam non sed esse? Et, accusantium praesentium. Consectetur perspiciatis soluta, vel porro eveniet sequi, optio illo sint necessitatibus ex est nobis nemo! Esse hic incidunt aspernatur nobis placeat tempore?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente laboriosam similique enim ipsum! Numquam ea quo quibusdam, explicabo atque, distinctio porro et asperiores eos pariatur quia neque ullam id blanditiis. Dolore, doloremque accusantium temporibus earum reprehenderit cupiditate aliquid vero doloribus non quas! Rerum tenetur quis exercitationem eius provident odit est iste eveniet vitae commodi consectetur obcaecati, voluptatum dicta ullam labore ab tempora consequuntur voluptates, neque consequatur. Similique corrupti, consectetur blanditiis quaerat laboriosam non sed esse? Et, accusantium praesentium. Consectetur perspiciatis soluta, vel porro eveniet sequi, optio illo sint necessitatibus ex est nobis nemo! Esse hic incidunt aspernatur nobis placeat tempore?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
