<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->string('nom');
            $table->string('cognom1');
            $table->string('cognom2')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->date('data_naixement');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('provincia');
            $table->unsignedInteger('codi_postal');
            $table->string('tipus_document');
            $table->string('numero_document');
            $table->string('sexe');
            $table->string('telefon');
            $table->unsignedInteger('id_rol');
            $table->foreign('id_rol')->references('id_rol')->on('ROL');
            $table->unsignedInteger('id_dades_empleat');
            $table->foreign('id_dades_empleat')->references('id_dades_empleat')->on('DADES_EMPLEAT');
            $table->boolean('actiu');
            $table->string('hash');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
