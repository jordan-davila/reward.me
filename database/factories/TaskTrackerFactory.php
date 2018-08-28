<?php

use Faker\Generator as Faker;

$factory->define(App\TaskTracker::class, function (Faker $faker) {
    return [
        'task_id' => $faker->numberBetween(1, 17)
    ];
});
