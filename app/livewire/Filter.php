<?php

namespace App\Livewire;

use Livewire\Component;

class Filter extends Component
{
    public $fields = []; // [{type,name,label,options}]
    public $values = [];
    public $target = null;

    public function mount($fields = [], $target = null)
    {
        $this->fields = $fields;
        $this->target = $target;
    }

    public function updatedValues()
    {
        if ($this->target) {
            $this->emitTo($this->target, 'filterUpdated', $this->values);
        }
    }

    public function resetFilter()
    {
        $this->values = [];
        if ($this->target) {
            $this->emitTo($this->target, 'filterUpdated', []);
        }
    }

    public function render()
    {
        return view('livewire.filter');
    }
}
