<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\commentaire;
use App\profile;
use App\publication;
use Faker\Generator as Faker;

$factory->define(commentaire::class, function (Faker $faker) {
    return [
        //
        'pub_id' => Publication::get('id')->random(),
        'profile_id' => profile::get('id')->random(),
        'commentaire' => $faker->text,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
