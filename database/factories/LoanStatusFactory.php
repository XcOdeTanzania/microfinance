<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LoanStatus;

use Faker\Generator as Faker;

$factory->define(LoanStatus::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Overpaid Loans', 'Pending First Approval', 'Pending Second Approval','Awaiting Disbursement','Rejected','Withdrawn', 'closed','Written Off Loans']),
    ];
});
