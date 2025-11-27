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
        $items = $this->service->getAssets();

        return view('Asset::index', [
            'items'   => $items,
            'headers' => ['รหัส', 'รหัสพนักงาน', 'ชื่อ', 'ฝ่าย', 'แผนก', 'โครงการ', 'สถานะ'],
            'columns' => ['code', 'employee_id', 'name', 'department', 'division', 'project', 'status'],
        ]);
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
