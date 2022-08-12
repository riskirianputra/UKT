<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
     protected $table = 'jenjang';
     protected $primaryKey = 'idJenjang';
     protected $fillable = ['idJenjang','namaJenjang'];
}
