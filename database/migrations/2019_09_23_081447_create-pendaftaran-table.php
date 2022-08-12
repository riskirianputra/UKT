<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');           
            $table->integer('idJalur')->unsigned();
            $table->foreign('idJalur')->references('idJalur')->on('jalur_masuk')->onDelete('cascade');            
            $table->string('noPendaftaran');
            $table->integer('angkatan');                    
            $table->integer('ptnke');    
            $table->string('namaPeserta');                        
            $table->integer('kodeProdi');
            $table->string('namaProdi');
            $table->string('bidikMisi');
            $table->string('alamat');
            $table->string('alamatKab');
            $table->string('alamatProv');
            $table->enum('jeniskelamin', ['L', 'P']);
            $table->string('tanggalLahir');
            $table->string('tempatLahir');            
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('telepon');
            $table->string('nik');
            $table->string('nisn');
            $table->string('email');
            $table->string('namaAyah');            
            $table->string('pendidikanAyah');
            $table->string('pekerjaanAyah');
            $table->string('penghasilanAyah');
            $table->string('namaIbu');            
            $table->string('pendidikanIbu');
            $table->string('pekerjaanIbu');
            $table->string('penghasilanIbu');
            $table->string('jumlahkakak');
            $table->string('jumlahadik');
            $table->integer('npsn');            
            $table->string('namaSekolah');
            $table->string('kabSekolah');
            $table->string('provSekolah');
            $table->integer('tahunLulus');
            $table->string('sppSekolah');
            $table->string('sppSekolahdibayar');
            $table->string('uangPembangunan');
            $table->string('uangPembangunandibayar');
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
        Schema::dropIfExists('pendaftaran');
    }
}
