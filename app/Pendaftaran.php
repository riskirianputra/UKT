<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
        protected $table = 'pendaftaran'; 
          protected $primaryKey = 'id';
        protected $fillable = ['id','user_id','idJalur','noPendaftaran', 'angkatan','ptnke', 'namaPeserta', 'kodeProdi','namaProdi','bidikMisi','alamat','alamatKab','alamatProv','jeniskelamin','tanggalLahir','tempatLahir','agama','kewarganegaraan','telepon','nik','nisn','email','namaAyah','pendidikanAyah','pekerjaanAyah','penghasilanAyah','namaIbu','pendidikanIbu','pekerjaanIbu','penghasilanIbu','jumlahkakak','jumlahadik','npsn','namaSekolah','kabSekolah','provSekolah','tahunLulus','sppSekolah','sppSekolahdibayar','uangPembangunan','uangPembangunandibayar'];

        public function mahasiswa()
    {
      return $this->hasMany( Mahasiswa::class );
    }

   public function jalur_masuk()
    {
      return $this->belongsTo(Jalur_masuk::class, 'idJalur');
    }

      public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
