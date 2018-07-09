<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_services', function (Blueprint $table) {
            $table->unsignedInteger('service_id');
            $table->foreign('service_id')->references('id')->on('Services');
            $table->unsignedInteger('rate_id');
            $table->foreign('rate_id')->references('id')->on('Rates');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
            $table->date('includingServiceDate');
            $table->increments('id');
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
        Schema::drop('users_services');
    }
}
