<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetRunningNumberSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'code' => 'OQ',
                'last_number' => 68,
                'year' => date('Y'),
                'digit' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'FU',
                'last_number' => 68,
                'year' => date('Y'),
                'digit' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'TL',
                'last_number' => 68,
                'year' => date('Y'),
                'digit' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'CP',
                'last_number' => 68,
                'year' => date('Y'),
                'digit' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('asset_running_numbers')->insert($items);
    }
}
