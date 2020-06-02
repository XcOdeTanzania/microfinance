<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['loan report', 'client report', 'group report', 'task report', 'disbursement report']),
        'description' => $faker->sentence,
        'reportable_id' => $faker->randomDigit,
        'reportable_type' => $faker->randomElement(['APP\Loan', 'APP\Client', 'APP\Group']),

    ];
});
