<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Module::class, function (Faker $faker) {
    return [
        'module_name'=>$faker->word,
        'describe'=>$faker->sentence
    ];
});
