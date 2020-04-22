<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\media;
use App\profile;
use Faker\Generator as Faker;

$factory->define(media::class, function (Faker $faker) {
    return [
        'profile_id' => profile::get('id')->random(),
        'source' => $faker->imageUrl,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
