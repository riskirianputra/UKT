<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konfirmasi extends Model
{
    	public function mahasiswa()
    {
    	return $this->hasMany( Mahasiswa::class );
    }

     public function pendaftaran()
    {
    	return $this->belongsTo(Pendaftaran::class);
    }

     public function jalurmasuk()
    {
    	return $this->belongsTo(Jalur_masuk::class);
    }

     public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function upload_file()
    {
    	return $this->belongsTo(Uploadfile::class);
    }

     public function mahasiswa_entry()
    {
    	return $this->belongsTo(Mahasiswa_entry::class);
    }
}
