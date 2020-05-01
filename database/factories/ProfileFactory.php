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
        'fname' => User::where('id',$user)->get('name'),
        'lname' => $faker->lastName,
        'sex' => $faker->randomElement(['M','F']),
        'phone' => $faker->phoneNumber,
        'adress' => $faker->randomElement([null,$faker->streetAddress]),
        'img' => $faker->randomElement([null,$faker->imageUrl($width = 640, $height = 480)]),
        'img_cov' => $faker->randomElement([null,$faker->imageUrl($width = 800, $height = 480)]),
        'statusRelationel' => $faker->randomElement([null,'Célibataire','en couple','marié(e)','fiancé(e)','divorcé(e)']),
        'birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'country' => $faker->randomElement([null,$faker->country]) ,
        'city' =>$faker->randomElement([null,$faker->city]) ,
        'job' => $faker->randomElement([null,$faker->jobTitle]) ,
        'education' => $faker->randomElement([null,$faker->company]) ,
        'bio' =>$faker->randomElement([null,$faker->text]),
        'email' => User::where('id',$user)->get('email'), //machkouk fiha 
        'created_at' => now(),
        'updated_at' => now()
        

    ];
});
