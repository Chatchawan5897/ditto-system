<?php

namespace App\Modules\Asset\Modules;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = [
        'code',
        'name_th',
        'serial_no',
        'image_item_thumbnail',
    ];
}
