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
        DB::table('menus')->insert([
            [
                'title' => 'ทรัพย์สินทั้งหมด',
                'route' => 'asset.index',
                'icon' => 'fa fa-folder',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'เบิกทรัพย์สิน',
                'route' => 'asset.withdraw',
                'icon' => 'fa fa-arrow-up',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'ยืม / ขยายเวลา',
                'route' => 'asset.borrow',
                'icon' => 'fa fa-clock',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'คืนทรัพย์สิน',
                'route' => 'asset.return',
                'icon' => 'fa fa-undo',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'โอนย้ายสถานที่',
                'route' => 'asset.transfer.location',
                'icon' => 'fa fa-map-marker',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'โอนย้ายผู้ถือครอง',
                'route' => 'asset.transfer.owner',
                'icon' => 'fa fa-user-transfer',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 6,
                'is_active' => true,
            ],
            [
                'title' => 'ทรัพย์สินในแผนก',
                'route' => 'asset.department',
                'icon' => 'fa fa-building',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 7,
                'is_active' => true,
            ],
            [
                'title' => 'ทรัพย์สินของฉัน',
                'route' => 'asset.mine',
                'icon' => 'fa fa-user',
                'parent_id' => $assetSystemId,
                'sub_parent_id' => null,
                'order_index' => 8,
                'is_active' => true,
            ],
        ]);



        // -----------------------------------------------------
        //  MAIN MENU : ข้อมูลพื้นฐาน
        // -----------------------------------------------------
        $baseInfoId = DB::table('menus')->insertGetId([
            'title' => 'ข้อมูลพื้นฐาน',
            'route' => null,
            'icon' => 'fa fa-database',
            'parent_id' => null,
            'sub_parent_id' => null,
            'order_index' => 2,
            'is_active' => true,
        ]);

        // -----------------------------------------------------
        //  เมนูย่อยภายใต้ ข้อมูลพื้นฐาน
        // -----------------------------------------------------
        DB::table('menus')->insert([
            [
                'title' => 'พนักงาน',
                'route' => 'users.index',
                'icon' => 'fa fa-users',
                'parent_id' => $baseInfoId,
                'sub_parent_id' => null,
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'สายอนุมัติ',
                'route' => 'user-orgs.index',
                'icon' => 'fa fa-share-alt',
                'parent_id' => $baseInfoId,
                'sub_parent_id' => null,
                'order_index' => 2,
                'is_active' => true,
            ],

        ]);
    }
}
