<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisFileTable extends Migration
{
    
    public function up()
    {
        Schema::create('jenis_file', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama_dokumen');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('jenis_file');
    }
}
