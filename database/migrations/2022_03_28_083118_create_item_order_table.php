<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('itemfood_id');
            $table->foreign('itemfood_id')->references('id')->on('itemfoods')->onDelete('cascade');
            $table->unsignedBigInteger('orderstore_id');
            $table->foreign('orderstore_id')->references('id')->on('order_stores')->onDelete('cascade');
            $table->string('quantity');
            $table->string('food_item');
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
        Schema::dropIfExists('item_order');
    }
}
