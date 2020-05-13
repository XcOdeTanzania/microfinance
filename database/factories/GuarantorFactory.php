<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guarantor;
use Faker\Generator as Faker;

$factory->define(Guarantor::class, function (Faker $faker) {
    return [
        'loan_id' => $faker->randomDigit,
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'date_of_birth' => $faker->dateTime($max = 'now', $timezone = null),
        'address' => $faker->address,
        'city' => $faker->randomElement(['Dar Es Salaam', 'Dodoma', 'Mwanza']),
        'state' => $faker->randomElement(['PWANI', 'KANDA YA ZIWA', 'KUSINI']),
        'post_code' => $faker->postcode,
        'country' => $faker->country,
        'phone_number' => $faker->e164PhoneNumber,
        'image' => '$faker->image',
        'relationship' => $faker->randomElement(['friend', 'brother', 'Father'])
    ];
});
