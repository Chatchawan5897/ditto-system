<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdStatusesSeeder extends Seeder
{
    public function run()
    {
        $statuses = [
            [
                'id' => 1,
                'category_id' => 1,
                'code' => 'STA0101',
                'name_en' => 'Normal',
                'name_th' => 'ปกติ',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'code' => 'STA0102',
                'name_en' => 'Damage',
                'name_th' => 'ชำรุด-ใช้งานได้',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'code' => 'STA0103',
                'name_en' => 'Disable',
                'name_th' => 'ชำรุด-ใช้งานไม่ได้',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            // ... ต่อไปเรื่อย ๆ ตามข้อมูลที่คุณให้มา
        ];

        DB::table('md_statuses')->insert($statuses);
    }
}
