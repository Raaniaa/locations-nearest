<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pharmacy;
use Faker\Generator as Faker;

$factory->define(Pharmacy::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'lat' => $faker->randomFloat(6, 30.778054, 30.782433),
        'lng' => $faker->randomFloat(6, 30.989893, 30.988500),
    ];
});
