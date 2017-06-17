<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utenti', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome');
            $table->string('cognome');
            $table->timestamps();
        });
        Schema::create('prestiti', function (Blueprint $table) {
            $table->increments('id');
        $table->integer('utente_id')->unsigned();
        $table->foreign('utente_id')->references('id')->on('utenti')->onDelete('cascade');
      $table->integer('libro_id')->unsigned();
        $table->foreign('libro_id')->references('id')->on('libri')->onDelete('cascade');
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
        Schema::dropIfExists('utenti');
        Schema::dropIfExists('prestiti');
    }
}
