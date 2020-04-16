<?php

use App\reactComnt;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([UserSeeder::class,
        PublicationSeeder::class,
        CommentaireSeeder::class,
        ReactPubSeeder::class,
        ReactComSeeder::class,
        FriendSeeder::class,
        MessageSeeder::class,
        MediaSeeder::class
        ]);
    }
}
