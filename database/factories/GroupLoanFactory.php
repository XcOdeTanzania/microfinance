<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GroupLoan;
use Faker\Generator as Faker;

$factory->define(GroupLoan::class, function (Faker $faker) {
    return [
        'group_id' => $faker->randomElement([1,2,3,4,5]),
        'amount' => $faker->randomElement([3090000, 400500, 555000, 76999]),
    ];
});
