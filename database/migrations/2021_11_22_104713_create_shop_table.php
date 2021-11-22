<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->id();
            $table->string('page_url')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customer_ip')->nullable();
            $table->string('order_no')->nullable();
            $table->string('order_date')->nullable();
            $table->string('order_goods_id')->nullable();
            $table->string('order_goods_cnt')->nullable();
            $table->string('order_goods_price')->nullable();
            $table->string('order_goods_discount')->nullable();
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
        Schema::dropIfExists('shop');
    }
}
