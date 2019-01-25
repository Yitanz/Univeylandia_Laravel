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
        Schema::create('serveis_zones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_zona');
            $table->foreign('id_zona')->references('id')->on('zones');
            $table->unsignedInteger('id_servei');
            $table->foreign('id_servei')->references('id')->on('serveis');
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
        Schema::dropIfExists('serveis_zones');
    }
}
