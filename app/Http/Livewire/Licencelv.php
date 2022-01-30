<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Licencelv extends Component
{
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    
    public function render()
    {
        return view('livewire.licencelv',
        ['licences'=>DB::table('licences') ->paginate($this->perPage)]

    );
    }
}
