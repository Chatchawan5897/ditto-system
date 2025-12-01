<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('menus')->truncate();

        // -----------------------------------------------------
        //  MAIN MENU : ระบบทรัพย์สิน
        // -----------------------------------------------------
        $assetSystemId = DB::table('menus')->insertGetId([
            'title' => 'ระบบทรัพย์สิน',
            'route' => null,
            'icon' => 'fa fa-box',
            'parent_id' => null,
            'sub_parent_id' => null,
            'order_index' => 1,
            'is_active' => true,
        ]);

        // -----------------------------------------------------
        //  เมนูหลักภายใต้ ระบบทรัพย์สิน
        // -----------------------------------------------------

        // 1. ทรัพย์สินทั้งหมด
        DB::table('menus')->insert([
            'title' => 'ทรัพย์สินทั้งหมด',
            'route' => 'asset.index',
            'icon' => 'fa fa-folder',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 1,
            'is_active' => true,
        ]);

        // 2. เบิกทรัพย์สิน
        DB::table('menus')->insert([
            'title' => 'เบิกทรัพย์สิน',
            'route' => 'asset.withdraw',
            'icon' => 'fa fa-arrow-up',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 2,
            'is_active' => true,
        ]);

        // 3. ยืม / ขยายเวลา
        DB::table('menus')->insert([
            'title' => 'ยืม / ขยายเวลา',
            'route' => 'asset.borrow',
            'icon' => 'fa fa-clock',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 3,
            'is_active' => true,
        ]);

        // 4. คืนทรัพย์สิน
        DB::table('menus')->insert([
            'title' => 'คืนทรัพย์สิน',
            'route' => 'asset.return',
            'icon' => 'fa fa-undo',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 4,
            'is_active' => true,
        ]);

        // 5. โอนย้ายสถานที่
        DB::table('menus')->insert([
            'title' => 'โอนย้ายสถานที่',
            'route' => 'asset.transfer.location',
            'icon' => 'fa fa-map-marker',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 5,
            'is_active' => true,
        ]);

        // 6. โอนย้ายผู้ถือครอง
        DB::table('menus')->insert([
            'title' => 'โอนย้ายผู้ถือครอง',
            'route' => 'asset.transfer.owner',
            'icon' => 'fa fa-user-transfer',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 6,
            'is_active' => true,
        ]);

        // -----------------------------------------------------
        //  ส่วนอื่น ๆ
        // -----------------------------------------------------

        // 7. ทรัพย์สินในแผนก
        DB::table('menus')->insert([
            'title' => 'ทรัพย์สินในแผนก',
            'route' => 'asset.department',
            'icon' => 'fa fa-building',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 7,
            'is_active' => true,
        ]);

        // 8. ทรัพย์สินของฉัน
        DB::table('menus')->insert([
            'title' => 'ทรัพย์สินของฉัน',
            'route' => 'asset.mine',
            'icon' => 'fa fa-user',
            'parent_id' => $assetSystemId,
            'sub_parent_id' => null,
            'order_index' => 8,
            'is_active' => true,
        ]);
    }
}
