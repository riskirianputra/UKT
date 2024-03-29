<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategory', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('idPeriode')->unsigned();
            $table->foreign('idPeriode')->references('id')->on('periode')->onDelete('cascade');
            $table->string('namaKategory');
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
        Schema::dropIfExists('kategory');
    }
}
