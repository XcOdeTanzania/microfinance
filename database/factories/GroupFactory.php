<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'account_number' => $faker->uuid,
        'activation_date' => $faker->dateTime($max = 'now', $timezone = null),
        'uuid' => $faker->uuid,
        'meeting_day' => $faker->randomElement(['monday', 'tuesday', 'wenesday', 'thursday', 'friday', 'saturday', 'sunday']),
        'meeting_location' => $faker->address,
        'meeting_frequency' => $faker->word,
        'branch_id' => $faker->randomElement([1,2,3,4,5]),
        'client_id' => $faker->randomElement([1,2,3,4,4,5,6,7,8,9,10,11,12,13,14,15]),
        'status' => $faker->randomElement(['pending_first_approval', 'pending_second_approval', 'active']),
    ];
});
