<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'body' => $faker->text(600),
        'img_url' => $faker->imageUrl(640, 480),
        'category_id' => mt_rand(1, 10),
        'user_id' => mt_rand(1, 25),
    ];
});
