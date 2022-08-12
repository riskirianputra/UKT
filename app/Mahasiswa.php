<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
   protected $table = 'mahasiswa';
    protected $fillable = ['id','user_id','pendaftaran_id','idJalur', 'nama', 'nisn','alamat','namaAyah','pekerjaanAyah','penghasilanAyah','namaIbu','pekerjaanIbu','penghasilanIbu','pangan', 
                           'non_pangan','penghasilan_ortu', 'jumlah_tanggungan','kepemilikan_rumah','luas_bangunan','alat_transportasi','daya_listrik','bidikMisi','agama','telepon','tempat_lahir', 'tgl_lahir', 'jk'];
         
    public function pendaftaran()
    {
      return $this->belongsTo(Pendaftaran::class, 'pendaftaran_id');
    }

     public function jalurmasuk()
    {
      return $this->belongsTo(Jalur_masuk::class, 'idJalur');
    }

         public function mahasiswa_entry()
    {
        return $this->belongsTo(Mahasiswa_entry::class);
    }

     public function user()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

     public function upload_file()
    {
        return $this->belongsTo(Uploadfile::class);
    }

    // relasi bobot
    public function bobot()
    {
        return $this->hasOne(Bobot::class);
    }

/**
*

DECLARE level_ukt VARCHAR(30);
       DECLARE bobotku FLOAT;       
    SET bobotku = (0.45*NEW.penghasilan_ortu)+(0.2*NEW.jumlah_tanggungan)+(0.1*NEW.kepemilikan_rumah)+(0.1*NEW.luas_bangunan)+(0.05*NEW.alat_transportasi)+(0.1*NEW.daya_listrik);
    IF bobotku > 3.70 THEN
       SET NEW.level = 7, NEW.idjalur = 46;#46;42
    ELSEIF (bobotku > 2.80) AND (bobotku <= 3.70) THEN
       SET NEW.level = 6, NEW.idjalur = 45;#45;41
    ELSEIF (bobotku > 2.35) AND (bobotku <= 2.80) THEN
       SET NEW.level = 5, NEW.idjalur = 35;#35;30
    ELSEIF (bobotku > 1.90) AND (bobotku <= 2.35) THEN
       SET NEW.level = 4, NEW.idjalur = 34;#34;29
    ELSEIF (bobotku > 1.45) AND (bobotku <= 1.90) THEN
       SET NEW.level = 3, NEW.idjalur = 33;#33;28
    ELSEIF (bobotku > 1.10) AND (bobotku <= 1.45) THEN
       SET NEW.level = 2, NEW.idjalur = 32;#32;27
    ELSE
       SET NEW.level = 1, NEW.idjalur = 31;#31;26
    END IF;     
     SET  NEW.bobot = bobotku;
    END;
*/

    public function getBobotMahasiswa()
    {
        $penghasilan_ortu = 0.45 * $this->penghasilan_ortu;
        $jumlah_tanggungan = 0.2 * $this->jumlah_tanggungan;
        $kepemilikan_rumah = 0.1 * $this->kepemilikan_rumah;
        $luas_bangunan = 0.1 * $this->luas_bangunan;
        $alat_transportasi = 0.05 * $this->alat_transportasi;
        $daya_listrik = 0.1 * $this->daya_listrik;

        $bobot = $penghasilan_ortu + $jumlah_tanggungan + $kepemilikan_rumah + $luas_bangunan + $alat_transportasi + $daya_listrik;

        return round($bobot, 2);
    }

    public function getLevelMahasiswa()
    {
        $level = 1;
        $bobot = $this->getBobotMahasiswa();

        if ($bobot > 3.70) {
            $level = 7;
        }
        elseif ($bobot > 2.80 && $bobot <= 3.70) {
            $level =  6;
        }
        elseif ($bobot > 2.35 && $bobot <= 2.80) {
            $level = 5;
        }
        elseif ($bobot > 1.90 && $bobot <= 2.35) {
            $level = 4;
        }
        elseif ($bobot > 1.45 && $bobot <= 1.90) {
            $level = 3;
        }
        elseif ($bobot > 1.10 && $bobot <= 1.45) {
            $level = 2;
        }
        return $level;
    }

    public function getDayaListrikList()
    {
        $dayaListrikList = [
            'sd Rp.50.000',
            'Rp.50.001 sd Rp.100.000',
            'Rp.100.001 sd Rp.200.000',
            'Rp.200.001 sd Rp.300.000',
            'Rp.300.001 sd Rp.450.000',
            'Rp.450.001 sd Rp.600.000',
            'Lebih dari Rp.600.000',
        ];

        return $dayaListrikList[$this->daya_listrik-1];
    }

    public function getAlattrans()
    {
        $alattransportasiList = [
           
           'Tidak Memiliki',
           'Roda Dua/Perahu (1 unit)',
           'Roda Dua/Perahu (lebih dari 1 unit)',
           'Roda Empat/Perahu Motor (1 unit)' ,
           'Roda Empat/Perahu Motor (2 unit)',
           'Roda Empat/Perahu Motor (lebih dari 2 unit)',
        ];

        return $alattransportasiList[$this->alat_transportasi-1];
    }

    public function getLuasbangunan()
    {
        $luasbangunanList = [

            'Kurang dari 36 m2',
            '36 m2 - 60 m2',
            '61 m2 - 90 m2',
            '91 m2 - 120 m2' ,
            '121 m2 - 150 m2',
            '151 m2 - 180 m2',
            'Lebih dari 180 m2/Apartemen',
        ];

        return $luasbangunanList[$this->luas_bangunan-1];
    }

    public function getkepemilikanrumah()  
    {
        $kepemilikanrumahList = [    

            'Menumpang/Rumah Bersama',
            'Mengontrak/Menyewa',
            'Milik Sendiri dan Lantai Tanah',
            'Milik Sendiri Semi Permanen' ,
            'Milik Sendiri Permanen 1 lantai',
            'Milik Sendiri Permanen > 1 lantai',
            'Milik Sendiri Lebih dari 1 rumah',
        ];

        return $kepemilikanrumahList[$this->kepemilikan_rumah-1];
    }

     public function getjumlahtanggungan()  
    {
        $jumlahtanggunganList = [    
           
            'Lebih dari 6',
            '6',
            '5',
            '4',
            '3',
            '2',
            '1',

        ];

        return $jumlahtanggunganList[$this->jumlah_tanggungan-1];
    }


     public function getpenghasilanortu()  
    {
        $penghasilanortuList = [    
                   
            'Kurang dari Rp.1.500.000',
            'Rp.1.500.001 sd Rp.3.000.000',
            'Rp.3.000.001 sd Rp.4.500.000',
            'Rp.4.500.001 sd Rp.6.000.000' ,
            'Rp.6.000.001 sd Rp.8.000.000',
            'Rp.8.000.001 sd Rp.10.000.000',
            'Lebih dari Rp.10.000.000',

        ];

        return $penghasilanortuList[$this->penghasilan_ortu-1];
    }


  

    
}
