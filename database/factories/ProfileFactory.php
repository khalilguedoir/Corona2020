<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\profile;
use App\User;
use Faker\Generator as Faker;
//taw nwalli nriggelha mba3d mochkol ya3ti email deifferent 3al user sinon nefs5ou el email mel profile 5ater 7attan champ houa bidou fi zouz tablouet fekra bhima
$factory->define(profile::class, function (Faker $faker) {
    $user = User::select('id','email')->get()->random();
    $theId = $user->id;
    $theEmail = $user->email;
    return [
        //
        'user_id' => $theId,
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'sex' => $faker->randomElement(['M','F']),
        'phone' => $faker->phoneNumber,
        'adress' => $faker->randomElement([null,$faker->streetAddress]),
        'img' => $faker->randomElement([null,'https://loremflickr.com/640/360']),
        'statusRelationel' => $faker->randomElement([null,'Célibataire','en couple','marié(e)','fiancé(e)','divorcé(e)']),
        'birth' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'country' => $faker->randomElement([null,$faker->country]) ,
        'city' =>$faker->randomElement([null,$faker->city]) ,
        'job' => $faker->randomElement([null,$faker->jobTitle]) ,
        'education' => $faker->randomElement([null,$faker->company]) ,
        'bio' =>$faker->randomElement([null,$faker->text]),
        'email' => $theEmail , //machkouk fiha 
        'created_at' => now(),
        'updated_at' => now()
        

    ];
});
