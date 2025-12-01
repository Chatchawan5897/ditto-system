<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'title',
        'route',
        'icon',
        'parent_id',
        'sub_parent_id',
        'order_index',
        'is_active',
    ];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')
            ->orderBy('order_index');
    }
}
