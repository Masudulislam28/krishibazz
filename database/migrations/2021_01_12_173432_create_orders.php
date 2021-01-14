<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
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
            $table->integer('sells_id');
            $table->integer('buyer_id');
            $table->integer('post_id');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('total_price');
            $table->string('payment_method');
            $table->float('transaction_fee',8,2);
            $table->string('send_from',14);
            $table->string('is_approved')->default(0);
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
