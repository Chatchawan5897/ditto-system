<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdItemTypeSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'code' => 'CP',
                'name_th' => 'ระบบคอมพิวเตอร์',
                'name_en' => 'Computer',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'OQ',
                'name_th' => 'เครื่องใช้สำนักงาน',
                'name_en' => 'Office Equipment',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'TL',
                'name_th' => 'เครื่องมือและอุปกรณ์',
                'name_en' => 'Tool and Equipment',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'FU',
                'name_th' => 'เครื่องตกแต่งและติดตั้ง',
                'name_en' => 'Furniture and Fixture',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'VH',
                'name_th' => 'ยานพาหนะ',
                'name_en' => 'Vehicle',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'SC',
                'name_th' => 'สแกนเนอร์',
                'name_en' => 'Scanner',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('md_item_types')->truncate(); // ลบข้อมูลเก่า + reset sequence
        DB::table('md_item_types')->insert($items);
    }
}
