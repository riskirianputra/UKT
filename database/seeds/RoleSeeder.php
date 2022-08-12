<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
        	
        	[
        		'id' => 1,
        		'name' => 'admin',     
        		'guard_name' =>'web',   		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],

        	[
        		'id' => 2,
        		'name' => 'Mahasiswa',     
        		'guard_name' =>'web',           		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],
                 
            [
        		'id' => 3,
        		'name' => 'Karyawan',     
        		'guard_name' =>'web',           		        		
        		'created_at'      => \Carbon\Carbon::now(),
            	'updated_at'      => \Carbon\Carbon::now()
        	],                  
        ]);
    
    }
}
