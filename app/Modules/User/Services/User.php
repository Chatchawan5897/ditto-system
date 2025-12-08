<?php

namespace App\Modules\User\Services;

use App\Modules\User\Repositories\UserRepository;
// AssetService Logic
class UserService
{
    // การนับจำนวน assets , workflow , validate เงื่อนไข business
    // การจัดการกระบวนการที่ซับซ้อน เช่น ตรวจนับ → อนุมัติ Service จะเรียกใช้ Repository

    protected $repo;

    public function __construct(AssetRepository $repo)
    {
        $this->repo = $repo;
    }
    // ดึงทั้งหมด
    public function getAssets()
    {
        return $this->repo->getAssets();
    }

    // หาตาม code
    public function findAsset($id)
    {
        return $this->repo->findByCode($id);
    }

    // ตัวอย่าง Logic เสริม เช่น Filter ตาม status
    public function filterByStatus($status)
    {
        return $this->repo->getAssets()
            ->where('status', $status)
            ->values();
    }
}
