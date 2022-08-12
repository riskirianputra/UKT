<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMappingProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapping_prodi', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('kodeProdiSnmptn');
            $table->integer('kodeProdiSbmptn');
            $table->string('namaProdi');
            $table->integer('idprodisireg');
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
        Schema::dropIfExists('mapping_prodi');
    }
}
