<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategory_detail extends Model
{
    protected $table = 'kategory_detail';
    protected $primaryKey = 'id';
  	protected $fillable = ['idKategory','isiKategory','poin'];

  public function kategory()
    {
    	return $this->belongsTo(Kategory::class, 'idKategory');
    }

    	public function mahasiswa_entry()
    {
    	return $this->hasMany( Mahasiswa_entry::class );
    }

}
