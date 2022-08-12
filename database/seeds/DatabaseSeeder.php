<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(FakultasSeeder::class);
        $this->call(JalurmasukSeeder::class);
        $this->call(JenisbiayaSeeder::class);
        $this->call(JenisfileSeed::class);
        $this->call(MappingjalurTableSeeder::class);
        $this->call(MappingprodiTableSeeder::class);
        $this->call(JenjangSeeder::class);              
    }
}
