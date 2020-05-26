<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'middle_name' => $faker->name,
        'last_name' => $faker->name,
        'registration_date' =>  $faker->dateTime($max = 'now', $timezone = null),
        'phone_number' => $faker->e164PhoneNumber,
        'date_birth' => $faker->dateTime($max = 'now', $timezone = null),
        'gender' => $faker->randomElement(['male', 'female']),
        'street' => $faker->word,
        'district' => $faker->word,
        'region' => $faker->word,
        'email' => $faker->email,
        'marital_status' => $faker->randomElement(['single', 'married','divorced','widowed']),
        'branch_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'group_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
        'user_id' => $faker->randomElement([1,2,3,4]),
        'password' => $faker->password,
        'status' => $faker->randomElement(['pending', 'closed','rejected','active']),
    ];
});
