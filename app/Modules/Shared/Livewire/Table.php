<?php

namespace App\Modules\Shared\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap'; // หรือ 'tailwind'

    public function mount($items, $headers, $columns, $actions)
    {
        // dd($items);
        $this->items   = $items;
        $this->headers = $headers;
        $this->columns = $columns;
        $this->actions = $actions;
    }

    public function render()
    {
        return view('Shared::livewire.table', [
            'items' => $this->items, // ส่งค่าไปยัง view
            'headers' => $this->headers,
            'columns' => $this->columns,
            'actions' => $this->actions,
        ]);
    }
}
