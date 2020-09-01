<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'product_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        'status' => $faker->randomElement(['Awaiting Disbursement', 'Closed', 'Active']),
        'amount' => $faker->randomElement([3090000, 400500, 555000, 76999]),
        'amount_refund_per_month' => $faker->randomElement([3000, 4000, 5000, 7000]),
        'interest' => $faker->randomElement([30900, 4005, 5550, 769]),
        'duration' => $faker->randomElement([6, 8, 12, 11, 10, 7]),
        'disbursement_date' =>  $faker->dateTimeBetween($startDate = 'now', $endDate = '1 year', $timezone = null),
        'repayment_start_date' =>  $faker->dateTimeBetween($startDate = 'now', $endDate = '1 year', $timezone = null),
        'repayment_end_date' =>  $faker->dateTimeBetween($startDate = 'now', $endDate = '1 year', $timezone = null),
        'account_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        'user_id' => $faker->randomElement([1, 2, 3, 4]),
        'client_id' => $faker->randomElement([1, 2, 3, 4]),
        'group_loan_id' => $faker->randomElement([null, 1, 2, 3, 4]),

    ];
});
