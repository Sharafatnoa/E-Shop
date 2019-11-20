<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'category_id' => \App\Models\Category::all()->random()->id,
        'title' => $faker->jobTitle,
        'description'=>$faker->text,
        'price'=>random_int(100, 1000),

    ];
});
