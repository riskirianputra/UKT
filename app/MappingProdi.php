<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MappingProdi extends Model
{
     protected $table = 'mapping_prodi';
    protected $fillable = ['kodeProdiSnmptn','kodeProdiSbmptn','namaProdi','idprodisireg'];
             
}
