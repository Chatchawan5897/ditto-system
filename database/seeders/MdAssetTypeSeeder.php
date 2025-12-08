<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdAssetTypeSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'code' => 'ADT',
                'name_th' => 'ทรัพย์สินควบคุม',
                'name_en' => 'ทรัพย์สินควบคุม',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:19',
                'updated_at' => '2024-05-16 10:30:19',
            ],
            [
                'id' => 2,
                'code' => 'FA',
                'name_th' => 'ทรัพย์สินทางบัญชี',
                'name_en' => 'ทรัพย์สินทางบัญชี',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => null,
                'created_at' => '2024-05-16 10:30:19',
                'updated_at' => '2024-05-16 10:30:19',
            ],
        ];
        DB::table('md_asset_types')->truncate();
        DB::table('md_asset_types')->insert($items);
    }
}
