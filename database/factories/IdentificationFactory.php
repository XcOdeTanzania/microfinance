<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Identification;
use Faker\Generator as Faker;

$factory->define(Identification::class, function (Faker $faker) {
    return [
        'attachment' => $faker->imageUrl($width = 640, $height = 480),
        'uuid' => $faker->uuid,
        'expiry_date' => $faker->dateTime($max = 'now', $timezone = null) ,
        'type' => $faker->word,
        'client_id' => $faker->randomDigit,
    ];
});
