<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        \App\User::insert([
                          
              'name'            => '123456',                           
              'email'           => '123456@lptik.com',
              'password'        => bcrypt('jambu123'),          
              'remember_token'  => NULL,             
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]);

        $role = Role::create(['name' => 'admin']);
        Permission::create(['name' => 'Administer roles & permissions']);
        $role->givePermissionTo('Administer roles & permissions');
        // $user->assignRole('admin');
        // $user->givePermissionTo('Administer roles & permissions');
    }
}
