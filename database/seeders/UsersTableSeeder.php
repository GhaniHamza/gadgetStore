<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Hamza', 'email' => 'abdulghani@gmail.com', 'password' => bcrypt('ghani123123')],
            ['name' => 'Muhammad', 'email' => 'afif@gmail.com', 'password' => bcrypt('afif123123')],
            ['name' => 'Izzah', 'email' => 'nurizzah@gmail.com', 'password' => bcrypt('nurizzah123123')],
            ['name' => 'Ahmad', 'email' => 'ahmad@gmail.com', 'password' => bcrypt('hazmi123123')],
        ]);
    }
}
