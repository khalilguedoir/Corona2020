<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_profile_from');
            $table->unsignedBigInteger('id_profile_to');
//el etat(0,1) hia elli bech ta3raf menha ken el invitation accepté ou nn 
//ken accepté ywalli fel list friends sinon fel list invitation 
            $table->integer('etat');
            $table->foreign('id_profile_from')->references('id')->on('profiles');
            $table->foreign('id_profile_to')->references('id')->on('profiles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
