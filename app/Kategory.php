<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
  protected $table = 'kategory';
  protected $fillable = ['idPeriode','namaKategory'];

 public function periode()
    {
    	return $this->hasMany(Periode::class, 'idPeriode');
    }

       	public function kategory_detail()
    {
    	return $this->hasMany( Kategory_detail::class );
    }

}
