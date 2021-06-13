<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accessories')->insert([
            ['accessories_name' => 'Cable', 'accessories_type' => 'USB to USB Mikro Cable', 'accessories_brand' => 'Anker', 'accessories_remarks' => 'For Android', 'accessories_price' => 33.50, 'staff_id' => 2],
            ['accessories_name' => 'Cable', 'accessories_type' => 'USB to USB Mikro Cable', 'accessories_brand' => 'Mcdodo', 'accessories_remarks' => 'For Android', 'accessories_price' => 24.50, 'staff_id' => 1],
            ['accessories_name' => 'Cable', 'accessories_type' => 'USB to USB Lightning Cable', 'accessories_brand' => 'Apple', 'accessories_remarks' => 'For Apple (Iphone)', 'accessories_price' => 79.00, 'staff_id' => 3],
            ['accessories_name' => 'Cable', 'accessories_type' => 'USB to USB Lightning Cable', 'accessories_brand' => 'Anker', 'accessories_remarks' => 'For Apple (Iphone)', 'accessories_price' => 50.00, 'staff_id' => 4],
            ['accessories_name' => 'Charger', 'accessories_type' => 'USB Power Adapter/Brick', 'accessories_brand' => 'Urgreen', 'accessories_remarks' => '-', 'accessories_price' => 25.00, 'staff_id' => 3],
            ['accessories_name' => 'Charger', 'accessories_type' => 'USB Power Adapter/Brick', 'accessories_brand' => 'Innergie', 'accessories_remarks' => '-', 'accessories_price' => 40.00, 'staff_id' => 2],
            ['accessories_name' => 'Charger', 'accessories_type' => 'USB C Power Adapter/Brick', 'accessories_brand' => 'Apple', 'accessories_remarks' => '-', 'accessories_price' => 94.00, 'staff_id' => 1],
            ['accessories_name' => 'Charger', 'accessories_type' => 'USB C Power Adapter/Brick', 'accessories_brand' => 'Urgreen', 'accessories_remarks' => '-', 'accessories_price' => 45.70, 'staff_id' => 1],

           
        ]);
    }
}
