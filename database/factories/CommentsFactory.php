<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'user_id' => $faker->numberBetween(1, 5),
        'post_id' => $faker->numberBetween(1, 20),
        'status' => $faker->numberBetween(0, 1),
    ];
});
