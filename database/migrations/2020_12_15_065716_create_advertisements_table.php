<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) 
        {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name',50);
            $table->string('contact_no',15);
            $table->string('category');
            $table->string('product_name',20);
            $table->bigInteger('quantity');
            $table->double('price',10,2);
            $table->text('details');
            $table->string('slug');
            $table->string('image')->default('default.png');
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
        Schema::dropIfExists('advertisements');
    }
}
