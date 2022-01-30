<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class LicenceSurrenderlv extends Component
{
    use WithPagination;
    protected $listeners= ['delete'];

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {
        return view('livewire.licence-surrenderlv',
        ['surrenderlicences'=>DB::table('surrenderlicences') ->paginate($this->perPage)]

    );
    }
}
