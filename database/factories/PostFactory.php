<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use App\User;
use Faker\Generator as Faker;

use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {

    $title = $this->faker->unique()->sentence();
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $this->faker->text(100),
        'image' => 'posts/' . $this->faker->image('public/storage/post', 640, 480, null, false),
        'category_id' => Category::all()->random()->id,
        'user_id' => User::all()->random()->id,
        'published_at' => $this->faker->date($format = 'Y-m-d', $max = 'now'),

    ];

});
