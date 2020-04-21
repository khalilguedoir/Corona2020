<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReactComntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('react_comnts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_com');
            $table->unsignedBigInteger('id_profile');
            $table->string('reaction');
            $table->foreign('id_com')->references('id')->on('commentaires');
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
        Schema::dropIfExists('react_comnts');
    }
}
