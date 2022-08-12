<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploadfile extends Model
{
     protected $table = "upload_file";
 
    protected $fillable = ['user_id','id_file','tglUpload','file','keterangan'];

    public function jenis_file()
    {
    	return $this->belongsTo(Jenisfile::class, 'id_file');
    }

      public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
}
