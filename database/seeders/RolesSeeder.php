<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'ADMIN',            // ทั้งระบบ
            'ASSET_MANAGER',    // ผู้จัดการทรัพย์สิน
            'DEPARTMENT_HEAD',  // หัวหน้าแผนก / ผู้อนุมัติ
            'APPROVER',         // ผู้อนุมัติแบบพิเศษ
            'IT_SUPPORT',       // ฝ่าย IT
            'EMPLOYEE',         // พนักงานทั่วไป
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(
                ['name' => $roleName, 'guard_name' => 'web']
            );
        }
    }
}
