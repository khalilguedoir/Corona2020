<?php

use Illuminate\Database\Seeder;
use App\User;
use App\profile;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class,20)->create()->each(function($user){
            $user->profile()->save(factory(profile::class)->make());
        });
    }
}
