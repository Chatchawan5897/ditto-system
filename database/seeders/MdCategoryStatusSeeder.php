<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdCategoryStatusSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'code' => 'CS01',
                'name_th' => 'สถานะทรัพย์สิน',
                'name_en' => 'สถานะทรัพย์สิน',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:16',
                'updated_at' => '2024-05-16 10:30:16',
            ],
            [
                'id' => 2,
                'code' => 'CS02',
                'name_th' => 'สถานะการขึ้นทะเบียนทรัพย์สิน',
                'name_en' => 'สถานะการขึ้นทะเบียนทรัพย์สิน',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:16',
                'updated_at' => '2024-05-16 10:30:16',
            ],
            [
                'id' => 3,
                'code' => 'CS03',
                'name_th' => 'สถานะการแจ้งทรัพย์สินใหม่',
                'name_en' => 'สถานะการแจ้งทรัพย์สินใหม่',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:16',
                'updated_at' => '2024-05-16 10:30:16',
            ],
            [
                'id' => 4,
                'code' => 'CS04',
                'name_th' => 'สถานะการแจ้งเบิกทรัพย์สิน',
                'name_en' => 'สถานะการแจ้งเบิกทรัพย์สิน',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:16',
                'updated_at' => '2024-05-16 10:30:16',
            ],
            [
                'id' => 5,
                'code' => 'CS05',
                'name_th' => 'สถานะการแจ้งยืมทรัพย์สิน',
                'name_en' => 'สถานะการแจ้งยืมทรัพย์สิน',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:16',
                'updated_at' => '2024-05-16 10:30:16',
            ],
        ];

        DB::table('md_category_statuses')->insert($items);
    }
}
