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
            $table->unsignedBigInteger('com_id');
            $table->unsignedBigInteger('profile_id');
            $table->string('reaction');
            $table->foreign('com_id')->references('id')->on('commentaires');
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
        Schema::dropIfExists('react_comnts');
    }
}
