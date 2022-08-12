<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';	
     protected $fillable = ['namaPeriode','tglBuka','tglTutup','status','informasi'];

     public function kategory()
    {
    	return $this->hasMany(Kategory::class);
    }

   public function tarif()
  {
    return $this->belongsTo(Tarif::class);
  }
}
