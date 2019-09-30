<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->sentence($nbWords = 56, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 26, $variableNbWords = true),
        'category_id' => $faker->numberBetween(0, 5),
        'user_id' => 1,
        'status' => 1,
        'is_featured' => 0,
        'views' => $faker->numberBetween(0, 5000),
        'image' => 'I5kNVb49zO.jpeg',
        'date' => '29/09/19'
    ];
});
