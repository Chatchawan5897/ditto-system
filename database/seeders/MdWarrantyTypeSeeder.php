<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdWarrantyTypeSeeder extends Seeder
{
    public function run()
    {
        // ลบข้อมูลเก่าทั้งหมด พร้อมรีเซ็ต sequence (ถ้าต้องการ)
        DB::table('md_warranty_types')->truncate();

        $warranties = [
            [
                'code' => 'W01',
                'name_th' => 'มีประกัน',
                'name_en' => 'warranty',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'code' => 'W02',
                'name_th' => 'ไม่มีประกัน',
                'name_en' => 'no warranty',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
        ];

        DB::table('md_warranty_types')->insert($warranties);
    }
}
