<?php

use App\reactComnt;
use Illuminate\Database\Seeder;

class ReactComSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(reactComnt::class,70)->create();
    }
}
