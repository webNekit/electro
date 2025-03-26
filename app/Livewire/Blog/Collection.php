<?php

namespace App\Livewire\Blog;

use Livewire\Component;

class Collection extends Component
{
    public $blogs;

    public function mount($blogs)
    {
        $this->blogs = $blogs;
    }
    public function render()
    {
        return view('livewire.blog.collection');
    }
}
