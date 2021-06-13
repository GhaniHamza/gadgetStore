<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerbankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('powerbank')->insert([
            ['powerbank_name' => 'Anker PowerCore 20100', 'powerbank_brand' => 'Anker', 'powerbank_mah_level' => 'A', 'powerbank_remarks' => '20100 mAh, 2 ports', 'powerbank_price' => 149.00, 'staff_id' => 1],
            ['powerbank_name' => 'MAXOAK Power Bank', 'powerbank_brand' => 'MAXOAK', 'powerbank_mah_level' => 'A', 'powerbank_remarks' => '50000 mAh, 6 ports', 'powerbank_price' => 299.00, 'staff_id' => 1],
            ['powerbank_name' => 'RAVPower Portable Charger PD 3.0','powerbank_brand' => 'RAVPower', 'powerbank_mah_level' => 'A', 'powerbank_remarks' => '20000 mAh, SATA 3 ports', 'powerbank_price' => 269.00, 'staff_id' => 3],
            ['powerbank_name' => 'Mophie Powerstation Plus with built-in cables','powerbank_brand' => 'Mophie', 'powerbank_mAh_level' => 'B', 'powerbank_remarks' => '6000 mAh, 2 ports', 'powerbank_price' => 199.00, 'staff_id' => 1],
            ['powerbank_name' => 'Anker PowerCore II','powerbank_brand' => 'Anker', 'powerbank_mah_level' => 'B', 'powerbank_remarks' => '10000 mAh, 1 ports', 'powerbank_price' => 129.00, 'staff_id' => 3],
            ['powerbank_name' => 'Aukey Power Bank','powerbank_brand' => 'Aukey', 'powerbank_mah_level' => 'B', 'powerbank_remarks' => '20000mAh, 2 ports', 'powerbank_price' => 139.00, 'staff_id' => 4],
        ]);
    }
}
