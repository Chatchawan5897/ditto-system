<?php

namespace App\Modules\Asset\Services;

use App\Modules\Asset\Repositories\ItemRepository;

class ItemService
{
    protected $repo;

    public function __construct(ItemRepository $repo)
    {
        $this->repo = $repo;
    }

    // ดึงรายการทั้งหมด
    public function getItems()
    {
        return $this->repo->getItems();
    }

    // ดึงตาม ID
    public function findItem($id)
    {
        return $this->repo->findItem($id);
    }

    // สร้างข้อมูลใหม่
    public function createItem(array $data)
    {
        return $this->repo->createItem($data);
    }

    // อัปเดตข้อมูล
    public function updateItem($id, array $data)
    {
        return $this->repo->updateItem($id, $data);
    }

    // ลบ
    public function deleteItem($id)
    {
        return $this->repo->deleteItem($id);
    }
}
