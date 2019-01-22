<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiniaCistellaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linia_cistella', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_cistella');
            $table->foreign('id_cistella')->references('id')->on('cistella');
            $table->unsignedInteger('producte');
            $table->foreign('producte')->references('id')->on('producte');
            $table->integer('quantitat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linia_cistella');
    }
}
