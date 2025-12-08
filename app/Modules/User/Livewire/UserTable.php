<?php

namespace App\Modules\User\Livewire;

use Livewire\Component;
use Livewire\WithPagination;     // <--- เพิ่มตรงนี้
use App\Modules\User\Modules\Item;

class UserTable extends Component
{
    use WithPagination;          // <--- เปิดใช้งาน pagination

    protected $paginationTheme = 'bootstrap'; // ใช้ Bootstrap pagination

    public $headers;
    public $columns;
    public $actions;
    public $filters = [];
    public $items;

    protected $listeners = ['filterUpdated' => 'applyFilter'];

    public function mount($items = [], $headers = [], $columns = [], $actions = [])
    {
        $this->items   = $items;
        $this->headers = $headers;
        $this->columns = $columns;
        $this->actions = $actions;
    }


    // ฟังก์ชันที่ถูกเรียกเมื่อ filter เปลี่ยน
    public function applyFilter($filters)
    {
        $this->filters = $filters;
        $this->resetPage(); // รีเซ็ตกลับหน้าแรก
    }

    public function render()
    {
        return view('Asset::livewire.asset-table', [
            'items' => $this->items,
            'headers' => $this->headers,
            'columns' => $this->columns,
            'actions' => $this->actions,
        ]);
    }
}
