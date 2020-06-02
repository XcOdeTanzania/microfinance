<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Charge;
use Faker\Generator as Faker;

$factory->define(Charge::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Arries', 'Loan Application', 'Loan Apeal']),
        'type' => $faker->randomElement(['Flat', 'Penality', 'Special']),
        'amount' => $faker->randomFloat(),
        'collected_on' => $faker->randomElement(['Installment', 'One Cash Deposit']),
        'date' => $faker->dateTime($max = 'now', $timezone = null),
        'payment_mode' => $faker->randomElement(['Mobile Money', 'Cash', 'Cheque']),
        'loan_id' => $faker->randomElement(['1', '2', '3','4','5','6','7','8','9','10'])
    ];
});
