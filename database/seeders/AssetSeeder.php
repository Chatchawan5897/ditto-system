<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Asset\Modules\Asset;
use Illuminate\Support\Str;

class AssetSeeder extends Seeder
{
    public function run()
    {

        $items = [
            [
                'parent_id' => null,
                'item_type_id' => 1,
                'item_subtype_id' => 13,
                'price_before_vat' => 19950.0,
                'assets_type_id' => 2,
                'vendor_id' => 1, // เพิ่มค่า default
                'invoice_no' => 'CP251109',
                'posting_date' => now(),
                'asset_date' => now(),
                'code' => 'CP251109',
                'name_en' => 'Notebook Lenovo ThinkBook 16 G7 IML',
                'name_th' => 'Notebook ยี่ห้อ Lenovo รุ่น ThinkBook 16 G7 IML',
                'is_group' => false,
                'can_borrow' => true,
                'brand_id' => 122,
                'model' => 'ThinkBook 16',
                'serial_no' => 'PW0KX4WT',
                'color' => 'ดำ',
                'size' => '16 นิ้ว',
                'weight' => '1.7 Kg.',
                'assets_status_id' => 1,
                'warranty_type_id' => 12,
                'warranty_start_date' => now(),
                'warranty_end_date' => now()->addYear(),
                'warranty_detail' => 'WTY : 1 Year/Onsite Upgrade from 1Y Courier/Carry-in',
                'is_active' => true,
                'created_by' => 4,
                'updated_by' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'owner_id' => 2,
                'document_no' => 'NA25120287',
                'document_type' => 'NA',
                'is_used_in_project' => false,
                'project_branch_id' => 3,
                'floor_area_room_id' => 435,
                'location_id' => 435,
                'property_registration_id' => 1, // เพิ่มค่า default
                'image_item_thumbnail' => '/uploads/_items_2025-12-01/219_1764576623.jpg',
                'image_item_asset_code' => '/uploads/_items_2025-12-01/645_1764576623.jpg',
                'image_item_img3' => '/uploads/_items_2025-12-01/405_1764576623.jpg',
                'image_item_img4' => '/assets/images/no-image-icon-23485.png',
                'image_item_img5' => '/assets/images/no-image-icon-23485.png',
            ],
            // เพิ่มอีก 2 รายการเหมือนกัน
        ];

        foreach ($items as $item) {
            Asset::create($item);
        }
    }
}
