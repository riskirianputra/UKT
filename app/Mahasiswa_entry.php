<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa_entry extends Model
{
 
  protected $table = 'mahasiswa_entry';
  protected $primarykey = 'id';
  protected $fillable = ['user_id','idKategory','idKategory_detail'];  

  

     public function kategory()
    {
      return $this->belongsTo(Kategory::class, 'idKategory');
    }

    public function kategory_detail()
    {
      return $this->belongsTo(Kategory_detail::class, 'idKategory_detail');
    }

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
