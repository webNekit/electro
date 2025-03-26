<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Banner extends Component
{
    public $data = [];

    public function mount($data)
    {
        $this->data = $data;
    }
    public function render()
    {
        return view('livewire.section.banner');
    }
}
