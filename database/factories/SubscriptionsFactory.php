<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscription;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Subscription::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'token' => Str::random(10),
    ];
});
