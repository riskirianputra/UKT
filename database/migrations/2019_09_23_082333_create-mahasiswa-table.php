<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');    
            $table->integer('pendaftaran_id')->unsigned();
            $table->foreign('pendaftaran_id')->references('id')->on('pendaftaran')->onDelete('cascade');
            $table->integer('idJalur')->unsigned();
            $table->foreign('idJalur')->references('idJalur')->on('jalur_masuk')->onDelete('cascade');              
            $table->string('nama');                    
            $table->string('nisn')->unique();           
            $table->string('alamat');                     
            $table->string('namaAyah');            
            $table->string('pekerjaanAyah');
            $table->string('penghasilanAyah');
            $table->string('namaIbu');                       
            $table->string('pekerjaanIbu');
            $table->string('penghasilanIbu');
            $table->string('pangan');
            $table->string('non_pangan');
            $table->integer('penghasilan_ortu');
            $table->integer('jumlah_tanggungan');
            $table->integer('kepemilikan_rumah');
            $table->integer('luas_bangunan');
            $table->integer('alat_transportasi');
            $table->integer('daya_listrik');                
            $table->string('bidikMisi');                                        
            $table->string('agama');   
            $table->string('telepon');                                       
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->enum('jk', ['L', 'P']);
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
        Schema::dropIfExists('mahasiswa');
    }
}
