<?php

namespace App\Modules\Asset\Repositories;

use App\Modules\Asset\Modules\Asset;
use Illuminate\Support\Facades\DB;

class AssetRepository
{
    public function getAll()
    {

        $items = DB::table('items as item')
            // ->leftJoin('users as users', 'item.owner_id', '=', 'users.id')
            ->leftJoin('md_statuses as status', 'item.assets_status_id', '=', 'status.id')
            ->select(
                'item.code',
                'item.name_th',
                'item.image_item_thumbnail',
                // DB::raw("users.employee_code || ': ' || users.first_name || ' ' || users.last_name as employee_full"),
                'status.name_th as status_name_th'
            )
            ->orderBy('item.created_at', 'desc')
            ->paginate(10);
        return $items;
    }
}
