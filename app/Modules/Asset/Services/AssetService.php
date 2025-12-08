<?php

namespace App\Modules\Asset\Services;

use App\Modules\Asset\Repositories\AssetRepository;

class AssetService
{
    protected $repo;

    public function __construct(AssetRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getAll($perPage = 10)
    {
        // ดึงข้อมูลพร้อม pagination
        return $this->repo->getAll()
            ->through(function ($item) {
                // แปลงข้อมูลสำหรับ Table component
                $item->assets_status_name = $item->status_name ?? '-'; // ถ้า join status table มาแล้ว
                $item->image_item_thumbnail = $item->image_item_thumbnail ?? null; // URL ของรูปภาพ
                return $item;
            });
    }
}
