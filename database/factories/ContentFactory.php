<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Content::class, function (Faker $faker) {
    return [
        'module_id'=>$faker->randomDigitNotNull,
        'user_id'=>$faker->randomDigitNotNull,
        'title'=>$faker->word,
        'content'=>$faker->text,
        'times'=>$faker->dateTime
    ];
});
