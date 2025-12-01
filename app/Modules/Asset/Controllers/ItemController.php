<?php

namespace App\Modules\Asset\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;  // ต้องเพิ่ม
use App\Modules\Asset\Services\ItemService; // ต้องเพิ่ม

class ItemController extends Controller
{
    protected $service;

    public function __construct(ItemService $service)
    {
        $this->service = $service;
    }

    /**
     * รายการทรัพย์สินทั้งหมด
     */
    public function index()
    {

        $items = $this->service->getItems();

        return view('Asset::items.index', [
            'items'   => $items,
            'headers' => ['รหัส', 'รหัสพนักงาน', 'ชื่อ', 'ฝ่าย', 'แผนก', 'โครงการ', 'สถานะ'],
            'columns' => ['code', 'employee_id', 'name', 'department', 'division', 'project', 'status'],
            'actions' => $this->getActions(),
        ]);
    }

    protected function getActions()
    {
        return [
            'show'   => '/assets/show/__ID__',
            'edit'   => '/assets/edit/__ID__',
            'delete' => '/assets/delete/__ID__',
        ];
    }
}
