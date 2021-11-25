<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Advertising', function (Blueprint $table) {
            $table->id();
            
            $table->string('Advertising_title')->nullable();
            $table->string('Advertising_str1')->nullable();
            $table->string('Advertising_str2')->nullable();
            $table->string('Advertising_seo')->nullable();
            $table->string('Advertising_url')->nullable();
            $table->boolean('Advertising_grp1')->nullable();
            $table->boolean('Advertising_grp2')->nullable();
            $table->boolean('Advertising_grp3')->nullable();
            $table->boolean('Advertising_grp4')->nullable();
            $table->datetime('Advertising_expire')->nullable();
            $table->double('Advertising_pay')->nullable();
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
        Schema::dropIfExists('_advertising');
    }
}
