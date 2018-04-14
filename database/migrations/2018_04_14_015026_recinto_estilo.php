<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecintoEstilo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recinto_estilo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recinto');
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
        Schema::dropIfExists('recinto_estilo');
    }
}
