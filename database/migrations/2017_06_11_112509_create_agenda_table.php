<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('agenda',function(Blueprint $table){
          $table->increments('id');
           $table->string('nome', 255);
           $table->string('cognome', 255);
           $table->string('email', 255);
           $table->string('telefono',20)->default(0);
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
        Schema::dropIfExists('agenda');
    }
}
