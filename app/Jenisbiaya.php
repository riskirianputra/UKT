<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisbiaya extends Model
{
     protected $table = 'jenisbiaya';	
      protected $primaryKey = 'idJenisbiaya';
     protected $fillable = ['idJenisbiaya','jenisBiaya'];

       public function tarif()
  {
  	return $this->belongsTo(Tarif::class);
  }
}
