<?php

use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('fakultas')->insert([
            
            [
                'id' => 1,
                'namaFakultas' => 'Fakultas Pertanian',             
                'idFakultasSia' => 01,
                'dbFakultas' => 'sia_pertanian_2019',
                'urutanNim' => 2,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 2,
                'namaFakultas' => 'Fakultas Kedokteran',                
                'idFakultasSia' => 02,
                'dbFakultas' => 'sia_kedokteran_2009',
                'urutanNim' => 3,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 3,
                'namaFakultas' => 'Fakultas MIPA',          
                'idFakultasSia' => 03,
                'dbFakultas' => 'sia_mipa_2009',
                'urutanNim' => 4,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 4,
                'namaFakultas' => 'Fakultas Hukum',         
                'idFakultasSia' => 04,
                'dbFakultas' => 'sia_hukum_2019',
                'urutanNim' => 1,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 5,
                'namaFakultas' => 'Fakultas Ekonomi',               
                'idFakultasSia' => 05,
                'dbFakultas' => 'sia_ekonomi_2019',
                'urutanNim' => 5,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 6,
                'namaFakultas' => 'Fakultas Peternakan',            
                'idFakultasSia' => 06,
                'dbFakultas' => 'sia_peternakan_2019',
                'urutanNim' => 6,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
            
            [
                'id' => 7,
                'namaFakultas' => 'Fakultas Teknik',            
                'idFakultasSia' => 07,
                'dbFakultas' => 'sia_teknik_2019',
                'urutanNim' => 9,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 8,
                'namaFakultas' => 'Fakultas Ilmu Budaya',            
                'idFakultasSia' => 8,
                'dbFakultas' => 'sia_sastra_2019',
                'urutanNim' => 7,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 9,
                'namaFakultas' => 'Fakultas Ilmu Sosial dan Ilmu Politik',            
                'idFakultasSia' => 9,
                'dbFakultas' => 'sia_isipol_2019',
                'urutanNim' => 8,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 10,
                'namaFakultas' => 'Fakultas Farmasi',            
                'idFakultasSia' => 11,
                'dbFakultas' => 'sia_farmasi_2019',
                'urutanNim' => 10,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 11,
                'namaFakultas' => 'Fakultas Teknologi Pertanian',            
                'idFakultasSia' => 12,
                'dbFakultas' => 'sia_fateta_2019',
                'urutanNim' => 11,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 12,
                'namaFakultas' => 'Fakultas Kesehatan Masyarakat',            
                'idFakultasSia' => 14,
                'dbFakultas' => 'sia_fkm_2019',
                'urutanNim' => 12,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 13,
                'namaFakultas' => 'Fakultas Keperawatan',            
                'idFakultasSia' => 15,
                'dbFakultas' => 'sia_fkeperawatan_2019',
                'urutanNim' => 13,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],


            [
                'id' => 14,
                'namaFakultas' => 'Fakultas Kedokteran Gigi',            
                'idFakultasSia' => 16,
                'dbFakultas' => 'sia_efkage_2019',
                'urutanNim' => 14,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],

            [
                'id' => 15,
                'namaFakultas' => 'Fakultas Teknologi Informasi',            
                'idFakultasSia' => 17,
                'dbFakultas' => 'sia_fti_2019',
                'urutanNim' => 15,
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
