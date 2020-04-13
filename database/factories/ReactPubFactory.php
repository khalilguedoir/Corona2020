<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\reactPub;
use App\publication;
use App\profile;
use Faker\Generator as Faker;

$factory->define(reactPub::class, function (Faker $faker) {
    return [
        //
        'pub_id' => publication::get('id')->random(),
        'profile_id' => profile::get('id')->random(),
        'reaction' => $faker->randomElement(['like','haha','wow','sad','grr']),
        'created_at' => now(),
        'updated_at' => now()
        
    ];
});
