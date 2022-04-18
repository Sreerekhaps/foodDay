<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemfoodModifierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemfood_modifier', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('itemfood_id');
            $table->foreign('itemfood_id')->references('id')->on('itemfoods')->onDelete('cascade');
            $table->unsignedBigInteger('modifier_id');
            $table->foreign('modifier_id')->references('id')->on('modifiers')->onDelete('cascade');
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
        Schema::dropIfExists('itemfood_modifier');
    }
}
