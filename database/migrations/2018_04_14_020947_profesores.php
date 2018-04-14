<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profesores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('a');
            $table->string('b');
            $table->char('c');
            $table->integer('d');
            $table->string('e');
            $table->char('f');
            $table->char('g');
            $table->char('h');
            $table->string('class');
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
        Schema::dropIfExists('profesores');
    }
}
