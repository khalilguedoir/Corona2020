<?php
use App\media;
use Illuminate\Database\Seeder;

class mediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(media::class,150)->create();
    }
}
