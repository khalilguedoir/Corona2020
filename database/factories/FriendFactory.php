<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\friend;
use App\profile;
use Faker\Generator as Faker;

$factory->define(friend::class, function (Faker $faker) {
    return [
        //
          'profile_id_from' => profile::get('id')->random(),
          'profile_id_to' => profile::get('id')->random(),
          'etat' => $faker->randomElement([0,1]),
          'created_at' => now(),
          'updated_at' => now()
    ];
});
