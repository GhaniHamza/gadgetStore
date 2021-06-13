<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            ['id' => 1, 'staff_name' => 'Hamaz Abdulghani'],
            ['id' => 2, 'staff_name' => 'Muhammad Afif'],
            ['id' => 3, 'staff_name' => 'Tengku Nur Izzah'],
            ['id' => 4, 'staff_name' => 'Ahmad Hazmi'],
        ]);
    }
}
