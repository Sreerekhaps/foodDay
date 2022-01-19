<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('order_date');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->string('customer');
            $table->string('mobile');
            $table->string('order_type');
            $table->string('order_status');
            $table->string('delivery_status');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->string('channel');
            $table->integer('item_total');
            $table->string('sub_total');
            $table->string('delivery_fee');
            $table->string('tax');
            $table->string('discount');
            $table->string('grand_total');
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
        Schema::dropIfExists('orders');
    }
}
