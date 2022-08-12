<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('namaFakultas');           
            $table->string('idFakultasSia');
            $table->string('dbFakultas');
            $table->integer('urutanNim');  
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
}
