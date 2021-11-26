<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titels', function (Blueprint $table) {
            $table->id();
            $table->boolean('lss_grp1')->nullable();
            $table->boolean('lss_grp2')->nullable();
            $table->boolean('lss_grp3')->nullable();
            $table->string('titles')->nullable();
            $table->string('texts')->nullable();
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
        Schema::dropIfExists('titels');
    }
}
