<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $user = \App\User::where('email', '=', 'stanislav.rosinskyy@gmail.com')->first();
    return [

        'user_id'=> $user->id, 'category_id'=> rand(1, 10),
        'title' => $faker->realText(12),
        'preview_text' => $faker->realText(),
        'preview_image' => rand(1,5).'.jpg',
        'preview_cover' => rand(1,5).'.jpg',
        'views' => rand(0,100),
        'body' => $faker->realText(),
        'created_at' => date('Y-m-d')
    ];
});
