<?php

namespace App\Modules\Asset\Livewire;

use App\Modules\Asset\Livewire\DB;

use Livewire\Component;
use App\Modules\Shared\Livewire\Table as SharedTable;
use App\Modules\Asset\Services\AssetService;
use Livewire\WithPagination;

class AssetTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $headers;
    public $columns;
    public $actions;
    public $filters = [];

    protected $service;

    public function boot(AssetService $service)
    {
        $this->service = $service;

        // กำหนด headers / columns / actions
        $this->headers = ['รูปทรัพย์สิน', 'รหัสทรัพย์สิน', 'ชื่อทรัพย์สิน', 'สถานะ'];
        $this->columns = ['image_item_thumbnail', 'code', 'name_th', 'employee_full', 'status_name_th'];

        $this->actions = [
            ['label' => 'Edit', 'event' => 'editAsset'],
            ['label' => 'Delete', 'event' => 'deleteAsset']
        ];
    }

    public function render()
    {
        $items = $this->service->getAll(10);

        // dd($items);
        return view('Asset::livewire.index', [
            'items' => $items,
            'headers' => $this->headers,
            'columns' => $this->columns,
            'actions' => $this->actions,
        ]);
    }
}
