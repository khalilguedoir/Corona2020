<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\publication;
use App\profile;
use Faker\Generator as Faker;

$factory->define(publication::class, function (Faker $faker) {
    return [
        // 
        'profile_id' => profile::get('id')->random(),
        'text' => $faker->randomElement([null,$faker->text]),
        'img' => $faker->randomElement([null,$faker->imageUrl]),
        'video' => $faker->randomElement([null,'https://vod-progressive.akamaized.net/exp=1586819849~acl=%2A%2F1743886931.mp4%2A~hmac=69c49ca0655ecf6c388a87254e2f2be6023b514bcdfdbed71d5bef8091d1607e/vimeo-prod-skyfire-std-us/01/1426/16/407130845/1743886931.mp4']),
        'created_at' => now(),
        'updated_at' => now()
    ];
});
