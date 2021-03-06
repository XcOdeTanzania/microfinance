<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Branch;

use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'email' => $faker->email,
        'region' => $faker->state,
        'address' => $faker->address,
        'phone_number' =>$faker->e164PhoneNumber,
        'post_code' => $faker->postcode,
        'district' => $faker->word,
        'street' => $faker->word,
        'company_id' => $faker->randomDigit,
    ];
});
