<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Judul Pertama',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'judul-pertama',
            'excerpt' => 'Ini adalah post pertama di category 1 judul pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, aliquam excepturi doloremque sapiente modi autem minima dolores ea ex, perspiciatis dolorum ducimus, labore maiores quibusdam tenetur. Doloribus necessitatibus dolores quisquam, voluptates ullam magnam alias unde, iusto tempore odit sed dolore ipsum consectetur quod consequuntur voluptas officiis corrupti cum fugit eveniet vitae asperiores voluptatibus delectus ipsa. Sapiente enim porro perferendis praesentium beatae deserunt eaque, nobis accusamus ipsum eos, perspiciatis, voluptatem sunt quidem officia accusantium iste nemo velit laudantium quos cupiditate? Cupiditate totam ea recusandae deleniti sed maxime voluptatibus quo sit adipisci, delectus nisi error, quam amet nostrum eum quos officiis quae.'
        ]);
        Post::create([
            'title' => 'Judul Ke Dua',
            'user_id' => 1,
            'category_id' => 1,
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Ini adalah post di category 1 judul ke dua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, aliquam excepturi doloremque sapiente modi autem minima dolores ea ex, perspiciatis dolorum ducimus, labore maiores quibusdam tenetur. Doloribus necessitatibus dolores quisquam, voluptates ullam magnam alias unde, iusto tempore odit sed dolore ipsum consectetur quod consequuntur voluptas officiis corrupti cum fugit eveniet vitae asperiores voluptatibus delectus ipsa. Sapiente enim porro perferendis praesentium beatae deserunt eaque, nobis accusamus ipsum eos, perspiciatis, voluptatem sunt quidem officia accusantium iste nemo velit laudantium quos cupiditate? Cupiditate totam ea recusandae deleniti sed maxime voluptatibus quo sit adipisci, delectus nisi error, quam amet nostrum eum quos officiis quae.'
        ]);
        Post::create([
            'title' => 'Judul Ke Tiga',
            'user_id' => 1,
            'category_id' => 3,
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Ini adalah post di category 3 judul ke tiga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, aliquam excepturi doloremque sapiente modi autem minima dolores ea ex, perspiciatis dolorum ducimus, labore maiores quibusdam tenetur. Doloribus necessitatibus dolores quisquam, voluptates ullam magnam alias unde, iusto tempore odit sed dolore ipsum consectetur quod consequuntur voluptas officiis corrupti cum fugit eveniet vitae asperiores voluptatibus delectus ipsa. Sapiente enim porro perferendis praesentium beatae deserunt eaque, nobis accusamus ipsum eos, perspiciatis, voluptatem sunt quidem officia accusantium iste nemo velit laudantium quos cupiditate? Cupiditate totam ea recusandae deleniti sed maxime voluptatibus quo sit adipisci, delectus nisi error, quam amet nostrum eum quos officiis quae.'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        User::create([
            'name' => 'Didik Prabowo',
            'email' => 'danieldidikprabowo@gmail.com',
            'password' => bcrypt('didik')
        ]);

        User::create([
            'name' => 'Joko Setidai',
            'email' => 'jokos@gmail.com',
            'password' => bcrypt('joko')
        ]);
    }
}
