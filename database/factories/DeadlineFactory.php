<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deadline;
use Faker\Generator as Faker;

$factory->define(Deadline::class, function (Faker $faker) {
    return [
        
        'jour'=> $faker->date,
      

     
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
