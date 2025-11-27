<?php

namespace App\Modules\Asset\Repositories;

class AssetRepository
{
    /**
     * Mock data สำหรับ Asset ทั้งหมด
     */
    protected $mockAssets = [
        [
            'code'        => 'REA25080006',
            'employee_id' => 'DTH1935',
            'name'        => 'ชัชวาล ผาสุริวงศ์',
            'department'  => 'BDM : พัฒนาธุรกิจและการตลาด',
            'division'    => 'SDI : Software Development & Infrastructure',
            'project'     => 'โครงการ ราชการ DOL-อุตรดิตถ์',
            'status'      => 'ยกเลิก',
        ],
        [
            'code'        => 'REA25090017',
            'employee_id' => 'DTH2044',
            'name'        => 'ศุภชัย อานันทเกียรติ',
            'department'  => 'OPS : ฝ่ายปฏิบัติการ',
            'division'    => 'SDI : Software Development & Infrastructure',
            'project'     => 'TOT Fiber จังหวัดเชียงใหม่',
            'status'      => 'กำลังดำเนินการ',
        ],
        [
            'code'        => 'REA25100002',
            'employee_id' => 'DTH1850',
            'name'        => 'กฤติเดช วงศ์เพ็ญ',
            'department'  => 'MIS : ระบบสารสนเทศ',
            'division'    => 'SDI : Software Development & Infrastructure',
            'project'     => 'Internal Project – ระบบนับทรัพย์สิน 2025',
            'status'      => 'พร้อมใช้งาน',
        ],
        [
            'code'        => 'REA25100033',
            'employee_id' => 'DTH2011',
            'name'        => 'ภัทรพล รุ่งสว่าง',
            'department'  => 'HR : ทรัพยากรบุคคล',
            'division'    => 'HRD : พัฒนาบุคลากร',
            'project'     => 'โครงการพัฒนา HRD 2024',
            'status'      => 'พร้อมใช้งาน',
        ],
        [
            'code'        => 'REA25110012',
            'employee_id' => 'DTH1888',
            'name'        => 'สุนทร เกิดแก้ว',
            'department'  => 'OPS : ฝ่ายปฏิบัติการ',
            'division'    => 'Field : Operation Team',
            'project'     => 'ติดตั้งระบบ Fiber TOT อุดรธานี',
            'status'      => 'กำลังดำเนินการ',
        ],
        [
            'code'        => 'REA25120004',
            'employee_id' => 'DTH2100',
            'name'        => 'ปณต จิตรวิมล',
            'department'  => 'BDM : พัฒนาธุรกิจ',
            'division'    => 'Marketing : การตลาด',
            'project'     => 'โครงการ Marketing Campaign 2025',
            'status'      => 'ชำรุด',
        ],
        [
            'code'        => 'REA25130055',
            'employee_id' => 'DTH1677',
            'name'        => 'ฐิติพงศ์ ชูชาติ',
            'department'  => 'SDI : Software',
            'division'    => 'Development : ทีม Dev',
            'project'     => 'ระบบนับทรัพย์สิน Version 2.0',
            'status'      => 'พร้อมใช้งาน',
        ],
    ];

    /**
     * ส่งคืน Mock ทั้งหมด
     */
    public function getMockAssets()
    {
        return $this->mockAssets;
    }

    /**
     * Alias ของ getMockAssets() สำหรับอ่านง่าย
     */
    public function mockList()
    {
        return $this->mockAssets;
    }

     public function getAssets()
    {
        return collect($this->mockAssets);
    }
    
    /**
     * Find asset from mock by ID (ยังไม่มี id จริง)
     */
    public function findByCode($code)
    {
        return collect($this->mockAssets)->firstWhere('code', $code);
    }
}
