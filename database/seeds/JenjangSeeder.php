<?php

use Illuminate\Database\Seeder;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenjang')->insert([
        	
        	[
        		'idJenjang' => 1,
        		'namaJenjang' => 'Diploma III Reguler',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 2,
        		'namaJenjang' => 'S1 Reguler',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 3,
        		'namaJenjang' => '=========',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 4,
        		'namaJenjang' => 'D IV',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 5,
        		'namaJenjang' => 'Program Profesi',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 6,
        		'namaJenjang' => 'Diploma III Reguler Mandiri',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 7,
        		'namaJenjang' => 'S1 Reguler Mandiri',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 8,
        		'namaJenjang' => 'Sp-1',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 9,
        		'namaJenjang' => 'Sp-2',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],


        	[
        		'idJenjang' => 10,
        		'namaJenjang' => 'S2',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJenjang' => 11,
        		'namaJenjang' => 'S3',        		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

                        	
        ]);
    }
}
