<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            // $table->integer('mobile')->unique();
            // $table->mediumText('address');
            $table->string('city');
            $table->string('country');
            $table->string('password');
            // $table->boolean('verified')->default(false);
            // $table->integer('user_id')->unsigned()->index();
            // $table->string('token');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
