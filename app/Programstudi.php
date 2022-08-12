<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programstudi extends Model
{
  protected $table = 'programstudi';
  protected $primaryKey = 'id';
  protected $fillable = ['idProdi', 'idFakultas', 'namaPendekFak', 'idProdiSia', 'kodeProdiUniv', 'kodeProdiDikti', 'namaProgramStudi','idJenjang'];

  public function fakultas()
  {
  	return $this->belongsTo(Fakultas::class, 'idFakultas');
  }

 	  public function tarif()
  {
  	return $this->belongsTo(Tarif::class);
  }
}
