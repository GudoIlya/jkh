<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_resources', function (Blueprint $table) {
            $table->unsignedInteger('resource_id');
            $table->foreign('resource_id')->references('id')->on('resources');
            $table->unsignedInteger('rate_id');
            $table->foreign('rate_id')->references('id')->on('rates');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('includingResourceDate');
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
        Schema::drop('users_resources');
    }
}
