<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(App\Product::class, function (Faker $faker) {
    $name = $faker->company;

    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'price' => random_int(10, 100),
    ];
});
