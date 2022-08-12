<?php

use Illuminate\Database\Seeder;

class MappingprodiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {         
        DB::table('mapping_prodi')->insert([
        	
        	[
        		'id' => 1,        		
        		'kodeProdiSnmptn' =>  1411017,        	
        		'kodeProdiSbmptn'=> 	181012,
        		'namaProdi'=> 'AGRIBISNIS',
        		'idprodisireg'=>104,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,        		
        		'kodeProdiSnmptn' =>  1411025,        	
        		'kodeProdiSbmptn'=> 	181026,
        		'namaProdi'=> 'AGROEKOTEKNOLOGI',
        		'idprodisireg'=>103,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 3,        		
        		'kodeProdiSnmptn' =>  1411042,        	
        		'kodeProdiSbmptn'=> 	181042,
        		'namaProdi'=> 'AGROEKOTEKNOLOGI (KAMPUS 3 DAMASRAYA)',
        		'idprodisireg'=>274,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 4,        		
        		'kodeProdiSnmptn' =>  1411075,        	
        		'kodeProdiSbmptn'=> 	181074,
        		'namaProdi'=> 'AKUNTANSI',
        		'idprodisireg'=>21,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 5,        		
        		'kodeProdiSnmptn' =>  1411052,        	
        		'kodeProdiSbmptn'=> 	181052,
        		'namaProdi'=> 'ANTROPOLOGI SOSIAL',
        		'idprodisireg'=>41,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 6,        		
        		'kodeProdiSnmptn' =>  1411087,        	
        		'kodeProdiSbmptn'=> 	181086,
        		'namaProdi'=> 'BIOLOGI',
        		'idprodisireg'=>14,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 7,        		
        		'kodeProdiSnmptn' =>  1411013,        	
        		'kodeProdiSbmptn'=> 	181014,
        		'namaProdi'=> 'EKONOMI PEMBANGUNAN',
        		'idprodisireg'=>19,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 8,        		
        		'kodeProdiSnmptn' =>  1411172,        	
        		'kodeProdiSbmptn'=> 	181171,
        		'namaProdi'=> 'EKONOMI PEMBANGUNAN (KAMPUS 2 PAYAKUMBUH)',
        		'idprodisireg'=>121,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 9,        		
        		'kodeProdiSnmptn' =>  1411184,        	
        		'kodeProdiSbmptn'=> 	181183,
        		'namaProdi'=> 'FARMASI',
        		'idprodisireg'=>12,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 10,        		
        		'kodeProdiSnmptn' =>  1411106,        	
        		'kodeProdiSbmptn'=> 	181101,
        		'namaProdi'=> 'FISIKA',
        		'idprodisireg'=>16,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 11,        		
        		'kodeProdiSnmptn' =>  1411273,        	
        		'kodeProdiSbmptn'=> 	181272,
        		'namaProdi'=> 'GIZI',
        		'idprodisireg'=>281,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 12,        		
        		'kodeProdiSnmptn' =>  1412091,        	
        		'kodeProdiSbmptn'=> 	182096,
        		'namaProdi'=> 'ILMU ADMINISTRASI NEGARA',
        		'idprodisireg'=>43,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 13,        		
        		'kodeProdiSnmptn' =>  1412141,        	
        		'kodeProdiSbmptn'=> 	182141,
        		'namaProdi'=> 'ILMU HUBUNGAN INTERNASIONAL',
        		'idprodisireg'=>93,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

            [
                'id' => 14,             
                'kodeProdiSnmptn' =>  1412021,          
                'kodeProdiSbmptn'=>     182022,
                'namaProdi'=> 'ILMU HUKUM',
                'idprodisireg'=>18,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 15,             
                'kodeProdiSnmptn' =>  1411041,          
                'kodeProdiSbmptn'=>     181042,
                'namaProdi'=> 'ILMU KEPERAWATAN',
                'idprodisireg'=>10,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 16,             
                'kodeProdiSnmptn' =>  1411056,          
                'kodeProdiSbmptn'=>     181056,
                'namaProdi'=> 'ILMU KESEHATAN MASYARAKAT',
                'idprodisireg'=>11,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 17,             
                'kodeProdiSnmptn' =>  1412156,          
                'kodeProdiSbmptn'=>     182155,
                'namaProdi'=> 'ILMU KOMUNIKASI',
                'idprodisireg'=>100,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],


        	[
                'id' => 18,             
                'kodeProdiSnmptn' =>  1412083,          
                'kodeProdiSbmptn'=>     182082,
                'namaProdi'=> 'ILMU POLITIK',
                'idprodisireg'=>42,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 19,             
                'kodeProdiSnmptn' =>  1412036,          
                'kodeProdiSbmptn'=>     182026,
                'namaProdi'=> 'ILMU SEJARAH',
                'idprodisireg'=>35,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 20,             
                'kodeProdiSnmptn' =>  1411234,          
                'kodeProdiSbmptn'=>     181234,
                'namaProdi'=> 'ILMU TANAH',
                'idprodisireg'=>273,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 21,             
                'kodeProdiSnmptn' =>  1411265,          
                'kodeProdiSbmptn'=>     181264,
                'namaProdi'=> 'KEBIDANAN',
                'idprodisireg'=>275,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 22,             
                'kodeProdiSnmptn' =>  1411072,          
                'kodeProdiSbmptn'=>     181072,
                'namaProdi'=> 'KIMIA',
                'idprodisireg'=>13,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 23,             
                'kodeProdiSnmptn' =>  1412067,          
                'kodeProdiSbmptn'=>     182066,
                'namaProdi'=> 'MANAJEMEN',
                'idprodisireg'=>20,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 24,             
                'kodeProdiSnmptn' =>  1412164,          
                'kodeProdiSbmptn'=>     182163,
                'namaProdi'=> 'MANAJEMEN (KAMPUS 2 PAYAKUMBUH)',
                'idprodisireg'=>122,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 25,             
                'kodeProdiSnmptn' =>  1411095,          
                'kodeProdiSbmptn'=>     181094,
                'namaProdi'=> 'MATEMATIKA',
                'idprodisireg'=>15,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 26,             
                'kodeProdiSnmptn' =>  1411033,          
                'kodeProdiSbmptn'=>     181034,
                'namaProdi'=> 'PENDIDIKAN DOKTER',
                'idprodisireg'=>9,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 27,             
                'kodeProdiSnmptn' =>  1411064,          
                'kodeProdiSbmptn'=>     181064,
                'namaProdi'=> 'PENDIDIKAN DOKTER GIGI',
                'idprodisireg'=>102,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 28,             
                'kodeProdiSnmptn' =>  1411122,          
                'kodeProdiSbmptn'=>     181123,
                'namaProdi'=> 'PETERNAKAN',
                'idprodisireg'=>105,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 29,             
                'kodeProdiSnmptn' =>  1411257,          
                'kodeProdiSbmptn'=>     181256,
                'namaProdi'=> 'PETERNAKAN (KAMPUS 2 PAYAKUMBUH)',
                'idprodisireg'=>265,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 30,             
                'kodeProdiSnmptn' =>  1411226,          
                'kodeProdiSbmptn'=>     181226,
                'namaProdi'=> 'PSIKOLOGI',
                'idprodisireg'=>117,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 31,             
                'kodeProdiSnmptn' =>  1411125,          
                'kodeProdiSbmptn'=>     181125,
                'namaProdi'=> 'SASTRA DAERAH MINANGKABAU',
                'idprodisireg'=>38,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 32,             
                'kodeProdiSnmptn' =>  1411102,          
                'kodeProdiSbmptn'=>     181103,
                'namaProdi'=> 'SASTRA INDONESIA',
                'idprodisireg'=>36,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 33,             
                'kodeProdiSnmptn' =>  1411117,          
                'kodeProdiSbmptn'=>     181111,
                'namaProdi'=> 'SASTRA INGGRIS',
                'idprodisireg'=>37,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 34,             
                'kodeProdiSnmptn' =>  1411133,          
                'kodeProdiSbmptn'=>     181133,
                'namaProdi'=> 'SASTRA JEPANG',
                'idprodisireg'=>89,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 35,             
                'kodeProdiSnmptn' =>  1411211,          
                'kodeProdiSbmptn'=>     181212,
                'namaProdi'=> 'SISTEM INFORMASI',
                'idprodisireg'=>119,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 36,             
                'kodeProdiSnmptn' =>  1411114,          
                'kodeProdiSbmptn'=>     181115,
                'namaProdi'=> 'SISTEM KOMPUTER',
                'idprodisireg'=>101,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 37,             
                'kodeProdiSnmptn' =>  1411044,          
                'kodeProdiSbmptn'=>     181044,
                'namaProdi'=> 'SOSIOLOGI',
                'idprodisireg'=>40,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 38,             
                'kodeProdiSnmptn' =>  1411176,          
                'kodeProdiSbmptn'=>     181175,
                'namaProdi'=> 'TEKNIK ELEKTRO',
                'idprodisireg'=>34,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 39,             
                'kodeProdiSnmptn' =>  1411153,          
                'kodeProdiSbmptn'=>     181153,
                'namaProdi'=> 'TEKNIK INDUSTRI',
                'idprodisireg'=>32,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 40,             
                'kodeProdiSnmptn' =>  1411161,          
                'kodeProdiSbmptn'=>     181161,
                'namaProdi'=> 'TEKNIK LINGKUNGAN',
                'idprodisireg'=>33,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 41,             
                'kodeProdiSnmptn' =>  1411137,          
                'kodeProdiSbmptn'=>     181131,
                'namaProdi'=> 'TEKNIK MESIN',
                'idprodisireg'=>30,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 42,             
                'kodeProdiSnmptn' =>  1411192,          
                'kodeProdiSbmptn'=>     181191,
                'namaProdi'=> 'TEKNIK PERTANIAN',
                'idprodisireg'=>8,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 43,             
                'kodeProdiSnmptn' =>  1411145,          
                'kodeProdiSbmptn'=>     181145,
                'namaProdi'=> 'TEKNIK SIPIL',
                'idprodisireg'=>31,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 44,             
                'kodeProdiSnmptn' =>  1411203,          
                'kodeProdiSbmptn'=>     181204,
                'namaProdi'=> 'TEKNOLOGI HASIL PERTANIAN',
                'idprodisireg'=>7,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 45,             
                'kodeProdiSnmptn' =>  1411281,          
                'kodeProdiSbmptn'=>     181286,
                'namaProdi'=> 'PROTEKSI TANAMAN',
                'idprodisireg'=>108,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 46,             
                'kodeProdiSnmptn' =>  1411296,          
                'kodeProdiSbmptn'=>     181287,
                'namaProdi'=> 'PENYELUHAN PERTANIAN',
                'idprodisireg'=>472,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 47,             
                'kodeProdiSnmptn' =>  1411207,          
                'kodeProdiSbmptn'=>     000000,
                'namaProdi'=> 'TEKNOLOGI INDUSTRI PERTANIAN',
                'idprodisireg'=>476,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],        
        	
        	]);    
    }
}
