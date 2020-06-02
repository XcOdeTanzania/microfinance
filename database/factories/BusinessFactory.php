<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Business;
use Faker\Generator as Faker;

$factory->define(Business::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'type' => $faker->bs,
        'start_date' => $faker->dateTime($max = 'now', $timezone = null),
        'region' => $faker->state,
        'address' => $faker->address,
        'post_code' => $faker->postcode,
        'revenue' => $faker->numberBetween($min = 1000, $max = 9000),
        'expenses' => $faker->numberBetween($min = 1000, $max = 9000),
        'net_income' => $faker->numberBetween($min = 1000, $max = 9000),
        'client_id' => $faker->randomDigit,
    ];
});
