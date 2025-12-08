<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('md_departments')->truncate();

        DB::table('md_departments')->insert([
            [
                'id' => 1,
                'code' => 'HR',
                'name_th' => 'ทรัพยากรบุคคลและธุรการ',
                'name_en' => 'Human Resources and Administration',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 2,
                'code' => 'LAW',
                'name_th' => 'กฎหมาย',
                'name_en' => 'Legal',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
            [
                'id' => 3,
                'code' => 'IT',
                'name_th' => 'เทคโนโลยีสารสนเทศ',
                'name_en' => 'Information Technology',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ],
        ]);
    }
}
