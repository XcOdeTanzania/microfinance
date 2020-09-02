<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CollectionReport;
use Faker\Generator as Faker;

$factory->define(CollectionReport::class, function (Faker $faker) {
    return [
        'client_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        'loan_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        'amount_paid' => $faker->randomElement([3090000, 400500, 555000, 76999]),
        'overdue_amount' => $faker->randomElement([3000, 4000, 5000, 7000]),
        'loan_balance' => $faker->randomElement([3000, 4000, 5000, 7000]),
        'paid_date' =>  $faker->dateTimeBetween($startDate = 'now', $endDate = '1 year', $timezone = null), 
    ];
});
