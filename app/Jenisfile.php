<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenisfile extends Model
{
	 protected $table = "jenis_file";
 
    protected $fillable = ['nama_dokumen','keterangan'];

      public function upload_file()
    {
    	return $this->hasOne(Uploadfile::class, 'id_file');
    }
}
