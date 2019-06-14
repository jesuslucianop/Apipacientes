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
