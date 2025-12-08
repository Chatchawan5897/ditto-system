<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MdVendorsSeeder extends Seeder
{
    public function run()
    {
        $vendors = [
            [
                'id' => 982,
                'code' => 'VEN1000898',
                'name_en' => 'บริษัท สอาดกรุ๊ป(สาขาที่ 25) (เพาเวอร์มาร์ทแจ้ห่ม) จำกัด',
                'name_th' => 'บริษัท สอาดกรุ๊ป(สาขาที่ 25) (เพาเวอร์มาร์ทแจ้ห่ม) จำกัด',
                'tel' => '054209699',
                'address' => "ที่อยู่: 249 หมู่ 1\nแขวง/ตำบล: วิเชตนคร\nเชต/อำเภอ: แจ้ห่ม\nจังหวัด: ลำปาง\nรหัสไปรษณีย์: 52120",
                'type' => 'บริษัท',
                'is_active' => true,
                'created_by' => 4,
                'updated_by' => 4,
                'created_at' => '2025-05-08 11:12:37',
                'updated_at' => '2025-05-08 11:12:37',
            ],
            [
                'id' => 1,
                'code' => 'VEN0000000',
                'name_en' => 'NA',
                'name_th' => 'NA',
                'tel' => '91111',
                'address' => 'ทดสอบ vendor',
                'type' => 'บริษัท',
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 372,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-06-30 11:44:13',
            ],
            [
                'id' => 983,
                'code' => 'VEN1000899',
                'name_en' => 'Apple South Asia(Thailand) Limited',
                'name_th' => 'Apple South Asia(Thailand) Limited',
                'tel' => '1800-01-9209',
                'address' => "999/9 อาคาร ดิออฟฟิศเศส แอท เซ็นทรัลเวิลด์ ชั้น 44\nห้องเลขที่ เอชเอช 4401-6 และ เอชเอช 4408-9\nถนนพระราม 1 แขวงปทุมวัน เขตปทุมวัน กรุงเทพฯ 10330 ประเทศไทย",
                'type' => 'บริษัท',
                'is_active' => true,
                'created_by' => 4,
                'updated_by' => 4,
                'created_at' => '2025-05-08 11:14:46',
                'updated_at' => '2025-05-08 11:14:46',
            ],
            [
                'id' => 984,
                'code' => 'VEN1000900',
                'name_en' => 'บริษัท สยามโกลบอลเฮ้าส์ จำกัด(มหาชน)',
                'name_th' => 'บริษัท สยามโกลบอลเฮ้าส์ จำกัด(มหาชน)',
                'tel' => 'NA',
                'address' => '232 หมู่ที่ 19 ตำบลรอบเมือง อำเภอเมืองร้อยเอ็ด จ.ร้อยเอ็ด 45000',
                'type' => 'บมจ.',
                'is_active' => true,
                'created_by' => 4,
                'updated_by' => 4,
                'created_at' => '2025-05-08 11:17:51',
                'updated_at' => '2025-05-08 11:17:51',
            ],
            [
                'id' => 985,
                'code' => 'VEN2000084',
                'name_en' => 'คุณสัญญา ประหุประมัง',
                'name_th' => 'คุณสัญญา ประหุประมัง',
                'tel' => 'NA',
                'address' => 'NA',
                'type' => 'ร้านสั่งทำเคาน์เตอร์หลุม',
                'is_active' => true,
                'created_by' => 4,
                'updated_by' => 4,
                'created_at' => '2025-06-09 12:00:49',
                'updated_at' => '2025-07-29 15:24:41',
            ],
        ];

        DB::table('md_vendors')->insert($vendors);
    }
}
