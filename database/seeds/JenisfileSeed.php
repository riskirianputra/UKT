<?php

use Illuminate\Database\Seeder;

class JenisfileSeed extends Seeder
{
    
    public function run()
    {
        DB::table('jenis_file')->insert([
        	
        	[
        		'id' => 1,        		
        		'nama_dokumen' => 'Surat Pernyataan Orang Tua',        	
        		'keterangan'=> 'Template'	,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,        		
        		'nama_dokumen' => 'Surat Perjanjian Mahasiswa Baru',        	
        		'keterangan'=> 'Template'	,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 3,        		
        		'nama_dokumen' => 'Rincian Gaji-Pendapatan Ortu',        	
        		'keterangan'=> 'Template'	,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 4,        		
        		'nama_dokumen' => 'Fotocopy Pajak Bumi dan Bangunan',        	
        		'keterangan'=> 'Template'	,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 5,        		
        		'nama_dokumen' => 'Fotocopy Kartu Keluarga',        	
        		'keterangan'=> 'Template'	,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 6,        		
        		'nama_dokumen' => 'Hadir Daftar Ulang',        	
        		'keterangan'=> 'Template'	,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        
        	
        	]);
    }
}
