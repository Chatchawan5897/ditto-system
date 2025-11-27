<?php

namespace App\Modules\Asset\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class AssetTable extends Component
{
    // public $items = [];

    // public function mount($items = [])
    // {
    //     $this->items = $items;
    // }

    public $items;
    public $headers;
    public $columns;
    public $actions;

    public function mount($items = [], $headers = [], $columns = [], $actions = null)
    {
        $this->items   = $items;
        $this->headers = $headers;
        $this->columns = $columns;
        $this->actions = $actions;
    }

    public function render()
    {
        return view('Asset::livewire.asset-table');
    }
}
