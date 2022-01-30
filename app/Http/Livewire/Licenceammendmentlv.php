<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Licenceammendmentlv extends Component
{


    use WithPagination;
    protected $listeners= ['delete'];

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.licenceammendmentlv',
        ['ammendmentoflicences'=>DB::table('licence_ammendent_requests') ->paginate($this->perPage)]

    );
    }
}
