<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Directors extends Component
{
    public $text = "";
    public function render()
    {
        return view('livewire.directors');
    }
}
