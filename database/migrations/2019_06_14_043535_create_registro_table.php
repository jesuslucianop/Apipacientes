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
        $table->string('Biotipo');
        $table->string('Perfil');
        $table->string('Labios');
        $table->string('Cierre_labial');
        $table->string('Estetica_afectada');
        $table->string('HIgiene bucal');

        $table->string('Maxilar_Boveda_palatina');
        $table->string('Maxilar_Forma_arcada');
        $table->string('Maxilar_Detincion');
        $table->string('Maxilar_Descripcion_arcada');


        $table->string('Mandibular_Forma_arcada');
        $table->string('Mandibular_denticion');
        $table->string('Mandibular_descripcion_denticion');

        $table->string('Relacioncanina_Derecha');
        $table->string('Relacioncanina_Izquierda');

        $table->string('Relacionmolar_Derecha');
        $table->string('Relacionmolar_Izquierda');
   
        $table->string('Desviacionlineamedia_superior');
        $table->string('Desviacionlineamedia_inferior');
        $table->string('Desviacionlineamedia_mordida_Cruzada_anterior');
        $table->string('Desviacionlineamedia_Resalte');
        $table->string('Desviacionlineamedia_bordeaborde');
        $table->string('Desviacionlineamedia_cubierta');
        $table->string('Desviacionlineamedia_mordida');
        $table->string('Desviacionlineamedia_estudios_De_modelos');
        $table->string('Desviacionlineamedia_espacionecesario');

        $table->string('Espaciodisponible_superior');
        $table->string('Espaciodisponible_inferior');

        $table->string('Estudiotransversal_14_24(35mm)');
        $table->string('Estudiotransversal_15_25(41mm)');
        $table->string('Estudiotransversal_16_26(47mm)');
        $table->string('Estudiotransversal_conclusion_estudio_modelos');
        $table->string('Estudiotransversal_estudio_panoramico');
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
