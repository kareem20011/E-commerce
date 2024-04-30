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
        Schema::create('order_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('quantity');
            $table->integer('offers')->nullable();
            $table->float('total');
            $table->enum('status', ['Pending', 'Processing', 'Shipped', 'Delivered', 'Cancelled', 'Returned'])->default('Pending');
            /*
            Pending: order is placed but payment is not yet confirmed
            Processing: Payment has been confirmed
            Shipped: The order has been packaged and shipped to the customer
            Delivered: The order has been successfully delivered to the customer.
            */
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
        Schema::dropIfExists('order_lists');
    }
};
