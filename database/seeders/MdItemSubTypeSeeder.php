<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdItemSubTypeSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'code' => 'CP001',
                'item_type_id' => 1,
                'name_th' => 'Air Card',
                'name_en' => 'Air Card',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 2,
                'code' => 'CP002',
                'item_type_id' => 1,
                'name_th' => 'All In One PC',
                'name_en' => 'All In One PC',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 3,
                'code' => 'CP003',
                'item_type_id' => 1,
                'name_th' => 'Case CPU',
                'name_en' => 'Case CPU',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
        ];

        DB::table('md_item_sub_types')->truncate(); // ลบข้อมูลเก่า + reset sequence

        DB::table('md_item_sub_types')->insert($items);
    }
}
