<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtraccioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ATRACCIO', function (Blueprint $table) {
            $table->increments('id_atraccio');
            $table->string('nom_atraccio')->unique();
            $table->string('tipus_atraccio');
            $table->date('data_inauguracio');
            $table->unsignedInteger('altura_min');
            $table->unsignedInteger('altura_max');
            $table->boolean('accessibilitat');
            $table->boolean('acces_express');
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
        Schema::table('ATRACCIO', function (Blueprint $table) {
            //
        });
    }
}
