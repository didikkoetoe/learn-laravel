<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            'title' => 'Judul satu',
            'slug' => 'judul-satu',
            'author' => 'Didik Prabowo',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam saepe nemo fugiat accusantium corrupti qui, officiis quod laborum provident quasi voluptates, asperiores deleniti praesentium! Eos sit assumenda nihil minima ipsa, inventore accusantium at labore corporis suscipit blanditiis? Velit inventore suscipit quam facere saepe ea necessitatibus excepturi magnam in voluptates, totam tempore quas rem eveniet. Rem necessitatibus provident dolor aperiam, expedita cumque excepturi cum maxime commodi consectetur deleniti quos alias deserunt. Laborum doloribus iure corporis tempore maiores nulla, ad molestias enim aperiam, hic dolorum optio dicta error, consectetur ex nisi consequuntur? Pariatur, officiis. Quod dolor dolorem tenetur cupiditate delectus, totam quisquam.'
        ],
        [
            'title' => 'Judul dua',
            'slug' => 'judul-dua',
            'author' => 'Budi Doremi',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam saepe nemo fugiat accusantium corrupti qui, officiis quod laborum provident quasi voluptates, asperiores deleniti Rem necessitatibus provident dolor aperiam, expedita cumque excepturi cum maxime commodi consectetur deleniti quos alias deserunt. Laborum doloribus iure corporis tempore maiores nulla, ad molestias enim aperiam, hic dolorum optio dicta error, consectetur ex nisi consequuntur? Pariatur, officiis. Quod dolor dolorem tenetur cupiditate delectus, totam quisquam.'
        ]
    ];

    public static function all()
    {
        return \collect(self::$blog_post);
    }

    public static function find(string $slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
