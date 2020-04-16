<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'profile_id' => profile::get('id')->random(),
        'source' => $faker->randomElement([null,$faker->imageUrl]),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
