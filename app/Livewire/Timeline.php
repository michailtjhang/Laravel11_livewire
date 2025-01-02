<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Timeline')]
class Timeline extends Component
{
    public function render()
    {
        return view('livewire.timeline');
    }
}
