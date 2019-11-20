<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'email'=> $faker->email,
        'phone_number'=>$faker->phoneNumber,
        'password'=>bcrypt('secret'),
        'email_verified_at'=> \Carbon\Carbon::now(),

    ];
});
