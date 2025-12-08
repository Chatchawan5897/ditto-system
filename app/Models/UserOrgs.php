<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrgs extends Model
{
    use HasFactory;

    protected $table = 'user_orgs';

    protected $fillable = [
        'employee_main_id',
        'employee_id',
        'active',
    ];

    /**
     * ดึงข้อมูลทั้งหมด พร้อมเรียงลำดับ (ตามที่นิยมใช้)
     */
    public static function getAll()
    {
        return self::orderBy('employee_main_id')
            ->orderBy('employee_id')
            ->get();
    }
}
