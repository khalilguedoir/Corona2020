<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\reactComnt;
use App\commentaire;
use App\profile;
use Faker\Generator as Faker;

$factory->define(reactComnt::class, function (Faker $faker) {
    return [
        //
        'com_id' => commentaire::get('id')->random(),
        'profile_id' => profile::get('id')->random(),
        'reaction' => $faker->randomElement(['like','haha','wow','grr']),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
