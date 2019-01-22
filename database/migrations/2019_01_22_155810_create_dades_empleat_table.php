<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadesEmpleatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DADES_EMPLEAT', function (Blueprint $table) {
          $table->increments('id_dades_empleat');
          $table->string('codi_seg_social');
          $table->string('num_nomina');
          $table->string('IBAN');
          $table->string('especialitat');
          $table->string('carrec');
          $table->date('data_inici_contracte');
          $table->date('data_fi_contracte');
          $table->unsignedInteger('id_horari');
          $table->foreign('id_horari')->references('id_horari')->on('HORARI');
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
        Schema::table('DADES_EMPLEAT', function (Blueprint $table) {
            //
        });
    }
}
