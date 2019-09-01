<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'content_id'=>$faker->randomDigitNotNull,
        'user_id'=>$faker->randomDigitNotNull,
        'message'=>$faker->text,
    ];
});
