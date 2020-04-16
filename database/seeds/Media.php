<?php

use Illuminate\Database\Seeder;

class Media extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(media::class,150)->create();
    }
}
