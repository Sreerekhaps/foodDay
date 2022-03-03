<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemfoodRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('itemfood_restaurants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('itemfood_id');
            $table->foreign('itemfood_id')->references('id')->on('itemfoods')->onDelete('cascade');
            $table->unsignedBigInteger('restaurant_id');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
