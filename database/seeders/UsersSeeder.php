<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'id' => 1,
                'employee_code' => 'SYS0000',
                'first_name' => 'System',
                'last_name' => 'Ditto',
                'phone_number' => null,
                'profile_image_path' => null,
                'email' => 'system@mail.com',
                'password' => '$2y$10$K20fgG5BFWeK9AWg6U6uT.2MFivL2n0zDDOemQ0VW1LAID3lDTRKG',
                'department_id' => 1,
                'sub_department_id' => 1,
                'position_id' => 120,
                'role_id' => 1,
                'is_active' => true,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2025-03-03 00:00:00',
                'updated_at' => '2025-03-03 00:00:00',
            ]
        ]);
    }
}
