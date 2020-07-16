<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;

use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'type' => $faker->word,
        'bank_account_no' => $faker->word,
        'tag' => $faker->word,
        'usage' => $faker->word,
        'manual_entries_allowed' => true,
        'enable_bank_reconciliation' =>true,
        'balance' => $faker->randomDigit,
        'unreconciled_balance' => $faker->randomDigit,
        'status' => $faker->word,
        'branch_id' => $faker->randomDigit,
    ];
});
