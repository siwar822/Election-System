<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'cin'=> $faker->sentence,
        'sexe'=> $faker->sentence,
        'username' => $faker->name,
        'birth_date'=> $faker->date,
    ];
});
