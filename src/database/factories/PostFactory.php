<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [

        'user_id'=> rand(1, 2), 'category_id'=> rand(1, 10),
        'title' => $faker->realText(12),
        'preview_text' => $faker->realText(),
        'preview_image' => rand(1,5).'.jpg',
        'preview_cover' => rand(1,5).'.jpg',
        'views' => 0,
        'comments' => 0,
        'body' => $faker->realText(),
        'created_at' => date('Y-m-d')
    ];
});
