<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactPubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('react_pubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pub_id');
            $table->unsignedBigInteger('profile_id');
            $table->string('reaction');
            $table->foreign('pub_id')->references('id')->on('publications');
            $table->foreign('profile_id')->references('id')->on('profiles');
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
        Schema::dropIfExists('react_pubs');
    }
}
