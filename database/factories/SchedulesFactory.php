<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'day' => $faker->randomElement(['Monday', 'Tuesday', 'Wenesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'amount' => $faker->randomFloat(),
        'loan_id' => $faker->randomDigit,
    ];
});
