<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MappingJalur extends Model
{
     protected $table = 'mapping_jalur';
    protected $fillable = ['idJalur','level','jalur'];
             

     public function jalurmasuk()
    {
      return $this->belongsTo(Jalur_masuk::class, 'idJalur');
   	}
}
