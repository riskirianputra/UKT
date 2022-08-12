<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur_masuk extends Model
{
        protected $table = 'jalur_masuk'; 
         protected $primaryKey = 'idJalur';
        protected $fillable = ['idJalur','kdJalur','namaJalur'];

     public function pendaftaran()
    {
      return $this->hasMany(Pendaftaran::class);
    }

     public function mapping_jalur()
    {
      return $this->hasMany(MappingJalur::class);
    }

       public function mahasiswa()
    {
      return $this->hasMany(Mahasiswa::class);
    }

      public function tarif()
    {
    return $this->hasOne(Tarif::class);
    }

}
