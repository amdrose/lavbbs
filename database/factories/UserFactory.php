<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'password'=>bcrypt('admin'),
        'headphoto'=>$faker->fileExtension
    ];
});
