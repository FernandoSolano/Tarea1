<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Redes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('redes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reliability');
            $table->integer('links_quantity');
            $table->string('capacity');
            $table->string('cost');
            $table->char('class');
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
        Schema::dropIfExists('redes');
    }
}
