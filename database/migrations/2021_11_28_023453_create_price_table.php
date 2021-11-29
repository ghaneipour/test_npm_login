<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->id();
            $table->string('price_title');
            $table->double('price_fee');
            $table->integer('price_id');
            $table->boolean('price_grp1')->nullable();
            $table->boolean('price_grp2')->nullable();
            $table->boolean('price_grp3')->nullable();
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
        Schema::dropIfExists('price');
    }
}
