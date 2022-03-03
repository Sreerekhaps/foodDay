<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemfoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemfoods', function (Blueprint $table) {
            $table->id();
            $table->string('food_item');
            $table->string('image');
            $table->string('description');
            $table->string('status')->default('Available');
            $table->boolean('type')->default('false');
            $table->string('name');
            $table->string('rate');
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
        Schema::dropIfExists('itemfoods');
    }
}
