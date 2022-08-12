<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = 'bobot';
  protected $fillable = ['mahasiswa_id','bobot','level'];

  // relasi table mahasiswa
  public function mahasiswa()
  {
  	return $this->belongsTo(Mahasiswa::class);
  }

    public function pendaftaran()
    {
    	return $this->belongsTo(Pendaftaran::class);
    }


  // fungsi perhitungan bobot
}
