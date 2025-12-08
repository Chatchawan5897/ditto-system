<?php

namespace App\Modules\Dashboard\Repositories;

class DashboardRepository
{
    /**
     * Mock data สำหรับ Asset ทั้งหมด
     */
    protected $mockAssets = [
        [
            'id'          => 1,
            'code'        => 'REA25080006',
            'employee_id' => 'DTH1935',
            'name'        => 'ชัชวาล ผาสุริวงศ์',
            'department'  => 'BDM : พัฒนาธุรกิจและการตลาด',
            'division'    => 'SDI : Software Development & Infrastructure',
            'project'     => 'โครงการ ราชการ DOL-อุตรดิตถ์',
            'status'      => 'ยกเลิก',
        ],
        [
            'id'          => 2,
            'code'        => 'REA25090017',
            'employee_id' => 'DTH2044',
            'name'        => 'ศุภชัย อานันทเกียรติ',
            'department'  => 'OPS : ฝ่ายปฏิบัติการ',
            'division'    => 'SDI : Software Development & Infrastructure',
            'project'     => 'TOT Fiber จังหวัดเชียงใหม่',
            'status'      => 'กำลังดำเนินการ',
        ],
        [
            'id'          => 3,
            'code'        => 'REA25100002',
            'employee_id' => 'DTH1850',
            'name'        => 'กฤติเดช วงศ์เพ็ญ',
            'department'  => 'MIS : ระบบสารสนเทศ',
            'division'    => 'SDI : Software Development & Infrastructure',
            'project'     => 'Internal Project – ระบบนับทรัพย์สิน 2025',
            'status'      => 'พร้อมใช้งาน',
        ],
        [
            'id'          => 4,
            'code'        => 'REA25100033',
            'employee_id' => 'DTH2011',
            'name'        => 'ภัทรพล รุ่งสว่าง',
            'department'  => 'HR : ทรัพยากรบุคคล',
            'division'    => 'HRD : พัฒนาบุคลากร',
            'project'     => 'โครงการพัฒนา HRD 2024',
            'status'      => 'พร้อมใช้งาน',
        ],
        [
            'id'          => 5,
            'code'        => 'REA25110012',
            'employee_id' => 'DTH1888',
            'name'        => 'สุนทร เกิดแก้ว',
            'department'  => 'OPS : ฝ่ายปฏิบัติการ',
            'division'    => 'Field : Operation Team',
            'project'     => 'ติดตั้งระบบ Fiber TOT อุดรธานี',
            'status'      => 'กำลังดำเนินการ',
        ],
        [
            'id'          => 6,
            'code'        => 'REA25120004',
            'employee_id' => 'DTH2100',
            'name'        => 'ปณต จิตรวิมล',
            'department'  => 'BDM : พัฒนาธุรกิจ',
            'division'    => 'Marketing : การตลาด',
            'project'     => 'โครงการ Marketing Campaign 2025',
            'status'      => 'ชำรุด',
        ],
        [
            'id'          => 7,
            'code'        => 'REA25130055',
            'employee_id' => 'DTH1677',
            'name'        => 'ฐิติพงศ์ ชูชาติ',
            'department'  => 'SDI : Software',
            'division'    => 'Development : ทีม Dev',
            'project'     => 'ระบบนับทรัพย์สิน Version 2.0',
            'status'      => 'พร้อมใช้งาน',
        ],
    ];

    public function getAssets()
    {
        return collect($this->mockAssets);
    }

    /**
     * Find asset from mock by ID (ยังไม่มี id จริง)
     */
    public function findByCode($id)
    {
        return collect($this->mockAssets)->firstWhere('id', $id);
    }
}
