<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\profile;
use App\User;
use Faker\Generator as Faker;

$factory->define(profile::class, function (Faker $faker) {
    $user=0;
    return [
        //
        'user_id' => $user = User::get('id')->random(),
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'sex' => $faker->randomElement(['M','F']),
        'phone' => $faker->phoneNumber,
        'adress' => $faker->randomElement([null,$faker->streetAddress]),
        'img' => $faker->randomElement([null,$faker->imageUrl($width = 640, $height = 480)]),
        'statusRelationel' => $faker->randomElement([null,'Célibataire','en couple','marié(e)','fiancé(e)','divorcé(e)']),
        'birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'email' => User::where('id',$user)->get('email'), //machkouk fiha 
        'created_at' => now(),
        'updated_at' => now()
        

    ];
});
