<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->integer('customer_id');
            $table->string('courier');
            $table->string('courier_service');
            $table->integer('courier_cost');
            $table->integer('weight');
            $table->string('name');
            $table->integer('phone');
            $table->integer('city_id');
            $table->integer('province_id');
            $table->text('address');
            $table->string('status');
            $table->integer('grand_total');
            $table->string('snap_token');
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
        Schema::dropIfExists('invoices');
    }
};
