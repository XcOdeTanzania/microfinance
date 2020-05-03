<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kin;

use Faker\Generator as Faker;

$factory->define(Kin::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'address' => $faker->address,
        'date_of_birth' => $faker->dateTime($max = 'now', $timezone = null) ,
        'region' => $faker->city,
        'phone_number' => $faker->e164PhoneNumber,
        'district' => $faker->streetName,
        'name' => $faker->name,
        'relationship' => $faker->word,
        'client_id' => $faker->randomDigit,
    ];
});
