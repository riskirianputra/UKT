<?php

use Illuminate\Database\Seeder;

class JalurmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jalur_masuk')->insert([
        	
        	[
        		'idJalur' => 1,
        		'kdJalur' => 'A',
        		'namaJalur' => 'SNMPTN',        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idJalur' => 2,
        		'kdJalur' => 'B',
        		'namaJalur' => 'SBMPTN',        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
        	
        	]);
    }
}
