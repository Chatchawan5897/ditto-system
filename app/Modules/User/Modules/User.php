<?php

namespace App\Modules\User\Modules;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = [
        'code',
        'name_th',
        'serial_no',
        'image_item_thumbnail',
    ];
}
