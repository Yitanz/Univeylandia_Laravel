<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServeiZonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servei_zona', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_zona');
            $table->foreign('id_zona')->references('id')->on('zona');
            $table->unsignedInteger('id_servei');
            $table->foreign('id_servei')->references('id')->on('servei');
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
        Schema::dropIfExists('servei_zona');
    }
}
