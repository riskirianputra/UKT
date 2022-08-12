<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
   protected $table = 'tarif';
   protected $primaryKey = 'idTarif';
   protected $fillable = ['idJalur','idProgramStudi','idJenisBiaya','idPeriode','angkatan','jumlah','syarat'];

      public function jalur_masuk()
    {
      return $this->belongsTo(Jalur_masuk::class, 'idJalur');
    }

      public function programstudi()
    {
      return $this->belongsTo(Programstudi::class, 'idProgramstudi');
    }

      public function jenisbiaya()
    {
      return $this->belongsTo(Jenisbiaya::class, 'idJenisbiaya');
    }

     public function periode()
    {
      return $this->belongsTo(Periode::class, 'idPeriode');
    }

     
}
    