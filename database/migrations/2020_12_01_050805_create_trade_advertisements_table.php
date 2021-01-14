<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_advertisements', function (Blueprint $table)
        {
           $table->id();
           $table->string('crop_category',50);
           $table->string('Crop_Name');
           $table->integer('Quantity');
           $table->double('Price',8,2);
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
        Schema::dropIfExists('trade_advertisements');
    }
}
