<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\RepaymentSummary;
use Faker\Generator as Faker;

$factory->define(RepaymentSummary::class, function (Faker $faker) {
    return [
        'loan_id' => $faker->randomElement([1,2,3,4,5]),
        'principal' => $faker->randomElement([3090000, 400500, 555000, 76999]),
        'interest' => $faker->randomElement([3090000, 400500, 555000, 76999]),
        'savings' => $faker->randomElement([3090000, 400500, 555000, 76999]),
        'total' => $faker->randomElement([3090000, 400500, 555000, 76999]),
    ];
});
