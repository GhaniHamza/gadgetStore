<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmartphonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('smartphones')->insert([
            ['smartphone_name' => 'Samsung Galaxy S21 Ultra', 'smartphone_brand' => 'Samsung', 'smartphone_inv_level' => 'A', 'smartphone_remarks' => 'Snapdragon 888, 16GB RAM, 512GB ROM, Black', 'smartphone_price' => 5199.00, 'staff_id' => 2],
            ['smartphone_name' => 'OnePlus 9 Pro', 'smartphone_brand' => 'OnePlus', 'smartphone_inv_level' => 'A', 'smartphone_remarks' => 'Snapdragon 888, 12GB RAM, 256GB ROM, Green', 'smartphone_price' => 3849.00, 'staff_id' => 2],
            ['smartphone_name' => 'OnePlus 9 Pro','smartphone_brand' => 'OnePlus', 'smartphone_inv_level' => 'A', 'smartphone_remarks' => 'Snapdragon 888, 12 GB RAM, 256GB ROM, Silver', 'smartphone_price' => 3849.00, 'staff_id' => 3],
            ['smartphone_name' => 'Xiaomi Mi 11 Ultra','smartphone_brand' => 'Xiaomi', 'smartphone_inv_level' => 'A', 'smartphone_remarks' => 'Snapdragon 888, 12GB RAM, 512GB ROM, Marble White', 'smartphone_price' => 4903.00, 'staff_id' => 3],
            ['smartphone_name' => 'Iphone 12','smartphone_brand' => 'Apple', 'smartphone_inv_level' => 'A', 'smartphone_remarks' => 'Bionic A14, 4GB RAM, 256GB RAM, Purple', 'smartphone_price' => 4339.00, 'staff_id' => 2],
            ['smartphone_name' => 'Iphone 12 Pro Max','smartphone_brand' => 'Apple', 'smartphone_inv_level' => 'A', 'smartphone_remarks' => 'Bionic A14, 6GB RAM, 512GB RAM, Gold', 'smartphone_price' => 6599.00, 'staff_id' => 1],
        ]);
    }
}
