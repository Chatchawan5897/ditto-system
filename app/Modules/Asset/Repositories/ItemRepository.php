<?php

namespace App\Modules\Asset\Repositories;

use App\Modules\Asset\Modules\Item;

class ItemRepository
{
    /**
     * ดึงรายการทั้งหมด
     */
    public function getItems()
    {
        return Item::orderBy('id', 'desc')->get();
    }

    /**
     * ดึงข้อมูลตาม ID
     */
    public function findItem($id)
    {
        return Item::findOrFail($id);
    }

    /**
     * บันทึกข้อมูลใหม่
     */
    public function createItem(array $data)
    {
        return Item::create($data);
    }

    /**
     * อัปเดตข้อมูล
     */
    public function updateItem($id, array $data)
    {
        $item = $this->findItem($id);
        $item->update($data);

        return $item;
    }

    /**
     * ลบข้อมูล
     */
    public function deleteItem($id)
    {
        $item = $this->findItem($id);
        return $item->delete();
    }
}
