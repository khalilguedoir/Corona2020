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
            $table->unsignedBigInteger('id_pub');
            $table->unsignedBigInteger('id_profile');
            $table->string('reaction');
            $table->foreign('id_pub')->references('id')->on('publications');
            $table->foreign('id_profile')->references('id')->on('profiles');
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
