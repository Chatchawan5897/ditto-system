<?php

namespace App\Modules\Asset\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Modules\Asset\Services\AssetService;

class AssetController extends Controller
{

    protected $service;

    public function __construct(AssetService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('Asset::index');

        // return view('Asset::index', [
        //     // 'items' => $items,
        //     'headers' => ['รหัส', 'รหัสพนักงาน', 'ชื่อ', 'ฝ่าย', 'แผนก', 'โครงการ', 'สถานะ'],
        //     'columns' => ['code', 'employee_id', 'name', 'department', 'division', 'project', 'status'],
        //     'actions' => $this->getActions(),
        // ]);
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
