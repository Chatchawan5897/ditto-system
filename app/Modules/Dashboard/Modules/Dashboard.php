<?php

namespace App\Modules\Dashboard\Modules;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{

    protected $fillable = [
        'code',
        'name_th',
        'serial_no',
        'image_item_thumbnail',
    ];
}
