<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vote;
use App\Candidat;
use App\User;
use Faker\Generator as Faker;

$factory->define(Vote::class, function (Faker $faker) {
    return [
   
        'user_id' => User::get('id')->random(),
      
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
