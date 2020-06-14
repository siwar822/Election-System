<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Candidat;
use Faker\Generator as Faker;

$factory->define(Candidat::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'cin'=> $faker->sentence,
        'email'=> $faker->unique()->safeEmail,
     
     
        'photo' => $faker->imageUrl,
        'sexe'=> $faker->sentence,
        'birth_date'=> $faker->date,
        'department'=> $faker->sentence,
        'class'=> $faker->sentence,
        'description' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
       
        
    ];
});
