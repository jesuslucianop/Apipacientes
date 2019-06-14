<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dueno', function (Blueprint $table) {
        $table->increments('Id_registro');
        $table->string('Nombres');
        $table->string('Apellidos');
        $table->string('Fecha_nacimiento');
        $table->string('Cedula');
        $table->string('Sexo');
        $table->text('Direccion');
        $table->string('Telefono');
        $table->string('Celular');
        $table->string('Diagnostico');
        $table->text('Tratamiento');
        $table->string('Tiempo_tratamiento');
        $table->string('Boveda_palatina');
        $table->string('Forma_arcada');
        $table->string('Biotipo');
        $table->string('Perfil');
        $table->string('Labios');
        $table->string('Cierre_labial');
        $table->string('HIgiene bucal');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
