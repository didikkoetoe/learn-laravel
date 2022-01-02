<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(mt_rand(1, 5), true),
            'category_id' => 1,
            'user_id' => mt_rand(1, 5),
            'slug' => Str::slug($this->faker->words(mt_rand(1, 4), true), '-'),
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
