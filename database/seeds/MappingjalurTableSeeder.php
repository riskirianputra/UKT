<?php

use Illuminate\Database\Seeder;

class MappingjalurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapping_jalur')->insert([
        	
        	[
        		'idmappingJalur' => 1,        		
        		'idJalur' => 1,        	
        		'level'=> 	1,
        		'jalur'=> 26,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 2,        		
        		'idJalur' => 1,        	
        		'level'=> 	2,
        		'jalur'=> 27,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 3,        		
        		'idJalur' => 1,        	
        		'level'=> 	3,
        		'jalur'=> 28,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 4,        		
        		'idJalur' => 1,        	
        		'level'=> 	4,
        		'jalur'=> 29,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 5,        		
        		'idJalur' => 1,        	
        		'level'=> 	5,
        		'jalur'=> 30,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 6,        		
        		'idJalur' => 1,        	
        		'level'=> 	6,
        		'jalur'=> 41,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 7,        		
        		'idJalur' => 1,        	
        		'level'=> 	7,
        		'jalur'=> 42,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],


        	[
        		'idmappingJalur' => 8,        		
        		'idJalur' => 2,        	
        		'level'=> 	1,
        		'jalur'=> 31,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 9,        		
        		'idJalur' => 2,        	
        		'level'=> 	2,
        		'jalur'=> 32,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 10,        		
        		'idJalur' => 2,        	
        		'level'=> 	3,
        		'jalur'=> 33,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 11,        		
        		'idJalur' => 2,        	
        		'level'=> 	4,
        		'jalur'=> 34,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 12,        		
        		'idJalur' => 2,        	
        		'level'=> 	5,
        		'jalur'=> 35,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 13,        		
        		'idJalur' => 2,        	
        		'level'=> 	6,
        		'jalur'=> 45,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'idmappingJalur' => 14,        		
        		'idJalur' => 2,        	
        		'level'=> 	7,
        		'jalur'=> 46,
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],


        
        	
        	]);
    }
}
