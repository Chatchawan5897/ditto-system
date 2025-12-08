<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('md_positions')->truncate();

        DB::table('md_positions')->insert([
            [
                'id' => 1,
                'code' => 'NONE',
                'name_th' => 'ไม่ทราบตำแหน่ง',
                'name_en' => 'Unknown',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 2,
                'code' => 'CEO',
                'name_th' => 'ประธานเจ้าหน้าที่บริหาร',
                'name_en' => 'Chief Executive Officer',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 3,
                'code' => 'CFO',
                'name_th' => 'ประธานเจ้าหน้าที่บริหารด้านการเงิน',
                'name_en' => 'Chief Financial Officer',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            // … จะใส่ให้ครบ 322 รายการ
        ]);
    }
}
