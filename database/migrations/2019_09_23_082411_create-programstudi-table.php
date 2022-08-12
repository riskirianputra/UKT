<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramstudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programstudi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProdi');
            $table->integer('idProdiSia');        
            $table->integer('kodeProdiUniv');
            $table->integer('kodeProdiDikti');                      
            $table->string('namaProgramStudi');
            $table->integer('idFakultas');     
            $table->string('namaPendekFak');
            $table->integer('idJenjang'); 
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
        Schema::dropIfExists('programstudi');
    }
}
