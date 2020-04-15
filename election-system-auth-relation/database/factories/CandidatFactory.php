<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Candidat;
use Faker\Generator as Faker;

$factory->define(Candidat::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'cin'=> $faker->sentence,
        'email'=> $faker->unique()->safeEmail,
        'phone'=> $faker->e164PhoneNumber,
        'username' => $faker->name,
        'photo' => $faker->imageUrl,
        'sexe'=> $faker->sentence,
        'birth_date'=> $faker->date,
        'votecount' => $faker->randomDigitNotNull,
        'department' => $faker->sentence,
        'class' => $faker->sentence,
    ];
});
