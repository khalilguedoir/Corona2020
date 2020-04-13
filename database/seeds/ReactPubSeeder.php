<?php

use App\reactPub;
use Illuminate\Database\Seeder;

class ReactPubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(reactPub::class,120)->create();
    }
}
