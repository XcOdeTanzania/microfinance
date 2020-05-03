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
        'post_code' => $faker->postcode,
        'district' => $faker->word,
        'street' => $faker->word,
        'phone_number'=>$faker->e164PhoneNumber,
        'company_id' => $faker->randomDigit,
    ];
});
