<?php

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
        $faker = \Faker\Factory::create();
        $users = [
            ['name' => 'Stanislav Rosinskyy', 'email' => 'stanislav.rosinskyy@gmail.com', 'password' => 'stanislav',
                'remember_token' => \Illuminate\Support\Str::random(10)]
        ];
        $categories = [
            ['name' => 'Features', 'slug' => 'features'],
            ['name' => 'Food', 'slug' => 'food'],
            ['name' => 'Travel', 'slug' => 'travel'],
            ['name' => 'Recipe', 'slug' => 'recipe'],
            ['name' => 'Bread', 'slug' => 'bread'],
            ['name' => 'Breakfast', 'slug' => 'breakfast'],
            ['name' => 'Meat', 'slug' => 'meat'],
            ['name' => 'Fastfood', 'slug' => 'fastfood'],
            ['name' => 'Salad', 'slug' => 'salad'],
            ['name' => 'Soup', 'slug' => 'soup'],
        ];
        DB::table('users')->insert($users);
        DB::table('categories')->insert($categories);
        factory(App\Post::class, 10)->create();
    }
}
