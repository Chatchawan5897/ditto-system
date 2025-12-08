<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'md_positions';  // ← ต้องใส่

    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'is_active',
        'created_by',
        'updated_by',
    ];
}
