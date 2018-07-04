<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services');
            $table->unsignedInteger('id_bill');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->double('service_quantity');
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
        Schema::drop('bill_services');
    }
}
