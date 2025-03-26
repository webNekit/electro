<?php

namespace App\Livewire\Section;

use Livewire\Component;

class Blog extends Component
{
    public $blogs;

    public function mount($blogs)
    {
        $this->blogs = $blogs;
    }

    public function render()
    {
        return view('livewire.section.blog');
    }
}
