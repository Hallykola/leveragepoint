<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Licenceapplicationlv extends Component
{
    public function render()
    {
        return view('livewire.licenceapplicationlv',
        ['licenceapplication'=>DB::table('companies') ->paginate($this->perPage)]
    );
    }
}
