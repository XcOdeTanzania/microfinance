<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Loan;
use Faker\Generator as Faker;

$factory->define(Loan::class, function (Faker $faker) {
    return [
        'loan_type_id' => $faker->randomDigit(),
        'status' => $faker->randomElement(['pending_first_approval', 'pending_second_approval', 'active']),
        'amount' => $faker->randomFloat(),
        'orign_of_funding' => $faker->word(),
        'duration' => $faker->randomDigit(),
        'repayment_every' => $faker->randomDigit(),
        'repayment_every_type' => $faker->randomElement(['daily', 'weekly', 'monthly']),
        'purpose' => $faker->word(),
        'auto_create_standing_instruction' => $faker->boolean(),
        'sector' => $faker->word(),
        'channel' => $faker->word(),
        'loanable_id' => $faker->randomDigit(),
        'loanable_type' => $faker->randomElement(['APP\Loan', 'APP\Client', 'APP\Group']),
    ];
});
