<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->char('sex');
            $table->string('phone')->unique()->nullable();
            $table->string('adress')->nullable();
            $table->string('img')->nullable();
            $table->string('statusRelationel')->nullable();
            $table->date('birth');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('job')->nullable();
            $table->string('education')->nullable();
            $table->string('bio')->nullable();
            $table->string('email');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('profiles');
    }
}
