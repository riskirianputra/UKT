<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif', function (Blueprint $table) {
            $table->increments('idTarif');     
            $table->integer('idPeriode');             
            $table->integer('idJalur');             
            $table->integer('idProgramStudi');           
            $table->integer('idJenisBiaya');                                 
            $table->string('angkatan');
            $table->string('jumlah');
            $table->string('syarat')->nullable();       
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
        Schema::dropIfExists('tarif');
    }
}
