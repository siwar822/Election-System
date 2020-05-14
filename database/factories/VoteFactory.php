<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vote;
use App\Candidat;
use App\Voter;
use Faker\Generator as Faker;

$factory->define(Vote::class, function (Faker $faker) {
    return [
        'cand_id' => Candidat::get('id')->random(),
        'voter_id' => Voter::get('id')->random(),
        'vote_date' => $faker->date,
        'vote_time' => $faker->time,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
