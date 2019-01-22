<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaProducteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_producte', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_usuari');
            $table->foreign('id_usuari')->references('id')->on('users');
            $table->boolean('estat');
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
        Schema::dropIfExists('venta_producte');
    }
}
