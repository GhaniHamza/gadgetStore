<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Cases')->insert([
            ['case_name' => 'Apple iPhone 12', 'case_brand' => 'Casetify', 'case_inv_level' => 'A', 'case_remarks' => 'Protection strong, weight light', 'case_price' => 120.71, 'staff_id' => 4],
            ['case_name' => 'Samsung Galaxy S21 Ultra', 'case_brand' => 'Spigen', 'case_inv_level' => 'A', 'case_remarks' => 'Protection ultimate, weight mid', 'case_price' => 80.51, 'staff_id' => 2],
            ['case_name' => 'ONEPLUS 9','case_brand' => 'Spigen', 'case_inv_level' => 'A', 'case_remarks' => 'Protection basic, weight light', 'case_price' => 60.21, 'staff_id' => 4],
            ['case_name' => 'Apple iPhone 12 Pro Max','case_brand' => 'Casetify', 'case_inv_level' => 'A', 'case_remarks' => 'Protection ultimate, weight heavy', 'case_price' => 122.56, 'staff_id' => 3],
            ['case_name' => 'Samsung Galaxy Note 20','case_brand' => 'Spigen', 'case_inv_level' => 'A', 'case_remarks' => 'Protection basic, weight light', 'case_price' => 150.91, 'staff_id' => 2],
            ['case_name' => 'Huawei P30 Pro','case_brand' => 'Typo', 'case_inv_level' => 'A', 'case_remarks' => 'Protection strong, weight light', 'case_price' => 45.46, 'staff_id' => 1],
        ]);
    }
}
