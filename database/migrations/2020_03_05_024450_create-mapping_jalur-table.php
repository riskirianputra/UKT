<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMappingJalurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapping_jalur', function (Blueprint $table) {
            $table->increments('idmappingJalur');                       
            $table->integer('idJalur')->unsigned();
            $table->foreign('idJalur')->references('idJalur')->on('jalur_masuk')->onDelete('cascade');                       
            $table->integer('level');
            $table->integer('jalur');           
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
        Schema::dropIfExists('mapping_jalur');
    }
}
