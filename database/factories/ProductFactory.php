<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'interest_rate' => $faker->randomElement([0.3, 0.2,]),
        'loan_application_fee_rate' => $faker->randomElement([0.5, 0.6,]),
        'loan_agreement_contract_fee_rate' => $faker->randomElement([0.1, 0.2,]),
        'penalty_for_late_payment_rate' => $faker->randomElement([0.03, 0.02,]),
        'loan_guarantee_fund_rate' => $faker->randomElement([0.3, 0.2,]),
        'insurance_fund_rate' =>  $faker->randomElement([3000, 4000, 5000, 7000]),
        'minimum_amount' =>  $faker->randomElement([1000000, 2000000, 3000000, 4000000, 5000000, 6000000, 7000000, 8000000, 9000000, 10000000]),
        'maximum_amount' => $faker->randomElement([10000000, 20000000, 30000000, 40000000, 50000000, 60000000, 70000000, 80000000, 90000000, 100000000]),
        'increment_per_cycle' => $faker->randomElement(['5 to 10 Million', '10 to 25 Million']),
    ];
});
