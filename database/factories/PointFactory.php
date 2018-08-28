<?php

use Faker\Generator as Faker;

$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'daily' => 0,
        'total' => ceil($faker->numberBetween(4000, 100000) / 100) * 100 // Rounds hundred
    ];
});
