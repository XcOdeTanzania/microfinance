<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LoanType;
use Faker\Generator as Faker;

$factory->define(LoanType::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Mkopo wa bajaji', 'Mkopo wa nyumba', 'mkopo wa bihashara ndogondogo']),
        'interest_rate' => $faker->randomFloat(),
        'max_duration' => $faker->randomDigit(),
        'duration_type' => $faker->randomElement(['weeks', 'months', 'years'])

    ];
});
