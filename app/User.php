<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
  
class User extends Authenticatable
{
   
    use Notifiable, HasRoles;

   
    protected $fillable = [
        'name','email', 'password'
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pendaftaran()
    {
       return $this->hasOne(Pendaftaran::class);
    }


      public function mahasiswa()
    {
       return $this->hasOne(Mahasiswa::class);
    }

     public function upload_file()
    {
       return $this->hasOne(Uploadfile::class);
    }

    public function setPasswordAttribute($password)
    {   
    $this->attributes['password'] = bcrypt($password);
    }

    //  public static function boot()
    // {
    //     parent::boot();
        
    //     static::saving(function ($model) {
    //         $model->password = Hash::make($model->password);
    //     });
    // }

}