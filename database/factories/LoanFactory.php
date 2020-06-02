<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'loan_type_id' => $faker->randomElement([1,2,3,4,5,6,7, 8,9,10]),
        'status' => $faker->randomElement(['Overpaid Loans', 'Pending First Approval', 'Pending Second Approval', 'Awaiting Disbursement', 'Rejected', 'Withdrawn', 'Closed', 'Written Off Loans','Active']),
        'amount' => $faker->randomElement([3090000, 400500, 555000, 76999]),
        'orign_of_funding' => $faker->word(),
        'duration' => $faker->randomElement([6, 8, 12, 11, 10, 7]),
        'repayment_every' => $faker->randomElement(['Monday', 'Tuesday', 'Wensday', 'Thursday','Friday','Saturday','Sunday']),
        'repayment_every_type' => $faker->randomElement(['months', 'months', 'months', 'months']),
        'purpose' => $faker->word(),
        'disbursement_date' =>  $faker->dateTimeBetween($startDate = 'now', $endDate = '1 year', $timezone = null),
        'auto_create_standing_instruction' => $faker->boolean(),
        'sector' => $faker->word(),
        'channel' => $faker->word(),
        'loanable_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'loanable_type' => $faker->randomElement(['App\Business', 'App\Client', 'App\Group']),
        'user_id' => $faker->randomElement([1,2,3,4]),

    ];
});
