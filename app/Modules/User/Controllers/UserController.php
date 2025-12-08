<?php

namespace App\Modules\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Modules\User\Services\UserService;

class UserController extends Controller
{

    protected $service;

    public function __construct(AssetService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $items = $this->service->getAssets();

        return view('Asset::index', [
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

    public function create()
    {
        return view('modules.asset.create');
    }

    public function store(Request $request)
    {
        return "กำลังบันทึกข้อมูล (mock)";
    }
}
