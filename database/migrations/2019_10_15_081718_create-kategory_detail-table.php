<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoryDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategory_detail', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('idKategory')->unsigned();
            $table->foreign('idKategory')->references('id')->on('kategory')->onDelete('cascade');
            $table->integer('poin');          
            $table->string('isiKategory');

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
        Schema::dropIfExists('kategory_detail');
    }
}
