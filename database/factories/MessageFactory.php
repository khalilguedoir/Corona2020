<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\message;
use App\profile;
use Faker\Generator as Faker;

$factory->define(message::class, function (Faker $faker) {
    return [
        //
        'profile1_id' => profile::get('id')->random(),
        'profile2_id' => profile::get('id')->random(),
        'msg' => $faker->realText($maxNbChars = 200,$indexSize=1),
        'created_at' => now(),
        'updated_at' => now() 
    ];
});
