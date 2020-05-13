<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collateral;

use Faker\Generator as Faker;

$factory->define(Collateral::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['fixed', 'asset']),
        'value' => $faker->randomFloat(),
        'description' => $faker->word,
        'loan_id' => $faker->randomDigit
    ];
});
