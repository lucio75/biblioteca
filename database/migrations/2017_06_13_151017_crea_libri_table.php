<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaLibriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libri',function(Blueprint $table){
        $table->increments('id');
        $table->string('nome');
        $table->string('descrizione');
        $table->string('ISBN');
        $table->integer('autore_id')->unsigned();
        $table->foreign('autore_id')->references('id')->on('autori')
            ->onDelete('cascade');
        $table->softDeletes();
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
        Schema::dropIfExists('libri');
    }
}
