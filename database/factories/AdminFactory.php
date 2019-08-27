<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'admin_name'=>$faker->name,
        'admin_password'=>bcrypt('admin'),
    ];
});
