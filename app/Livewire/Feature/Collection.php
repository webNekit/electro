<?php

namespace App\Livewire\Feature;

use Livewire\Component;

class Collection extends Component
{
    public $features;

    public function mount($features)
    {
        $this->features = $features;
    }

    public function render()
    {
        return view('livewire.feature.collection');
    }
}
