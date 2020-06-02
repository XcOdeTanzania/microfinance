<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Collateral;

use Faker\Generator as Faker;

$factory->define(Collateral::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement(['fixed', 'asset']),
        'value' => $faker->randomFloat(),
        'description' => $faker->word,
        'attachment' => $faker->imageUrl($width = 640, $height = 480),
        'loan_id' => $faker->randomDigit
    ];
});
