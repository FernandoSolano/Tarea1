<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstiloSexoPromedioRecinto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('estilo_sexo_promedio_recinto', function (Blueprint $table) {
            $table->increments('id');
            $table->char('sexo');
            $table->string('recinto');
            $table->double('promedio');
            $table->integer('ca');
            $table->integer('ec');
            $table->integer('ea');
            $table->integer('or');
            $table->integer('ca_ec');
            $table->integer('ea_or');
            $table->string('estilo');
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
        Schema::dropIfExists('estilo_sexo_promedio_recinto');
    }
}
