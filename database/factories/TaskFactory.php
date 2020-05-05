<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['loan pending first approval', 'loan pending second approval', 'client pending approval', 'loan awaiting disbursement', 'Group pending approval']),
        'user_id' => $faker->randomDigit,
        'branch_id' => $faker->randomDigit,
        'status' =>  $faker->randomElement(['completed', 'pendding']),
        'taskable_id' => $faker->randomDigit,
        'taskable_type' => $faker->randomElement(['APP\Loan', 'APP\Client', 'APP\Group']),
        
    ];
});
