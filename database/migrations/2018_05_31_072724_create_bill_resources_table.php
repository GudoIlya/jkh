<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_resource');
            $table->foreign('id_resource')->references('id')->on('resources');
            $table->unsignedInteger('id_bill');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->double('quantity_of_resource');
            $table->double('total_price');
            $table->unsignedInteger('id_rate');
            $table->foreign('id_rate')->references('id')->on('rates');
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
        Schema::drop('bill_resources');
    }
}
