<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Voter;
use Faker\Generator as Faker;

$factory->define(Voter::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'cin'=> $faker->sentence,
        'phone'=> $faker->e164PhoneNumber,
        'email'=> $faker->unique()->safeEmail,
        'username' => $faker->name,
        'sexe'=> $faker->sentence,
        'birth_date'=> $faker->date,
        'voting_status' => $faker->randomDigitNotNull,
        'department' => $faker->sentence,
        'class' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
