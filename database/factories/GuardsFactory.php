<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guard;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Guard::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
