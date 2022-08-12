<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('permissions')->insert([
        	
        	[
        		'id' => 1,
        		'name' => 'Administer roles & permissions',  
                'guard_name' =>'web',      		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'name' => 'Input',      
                'guard_name' =>'web',      		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
                              
        ]);
    
    }
}
