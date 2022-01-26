<?php

namespace App\Http\Livewire;

use App\Models\Payments;
use Livewire\Component;

class Paymentslv extends Component
{
    public function render()
    {
        return view('livewire.paymentslv',['payments'=>Payments::all()]);
    }
}
