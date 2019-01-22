<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipusProducteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipus_producte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('mida');
            $table->string('tickets_viatges');
            $table->string('foto_path');
            $table->string('foto_path_aigua');
            $table->integer('preu');
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
        Schema::dropIfExists('tipus_producte');
    }
}
