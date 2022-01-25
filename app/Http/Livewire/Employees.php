<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Employees as employ;

class Employees extends Component
{
    use WithPagination;
    protected $listeners= ['delete'];

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public $searchname = '';
    public $searchemploymentnumber= '';
    public $searchposition = '';
    public $searchemail = '';
    public $searchtelephone = '';

    public function render()
    {
     return view('livewire.employees', ['employees'=>employ::searchand($this->search, $this->searchname,$this->searchemploymentnumber,$this->searchposition ,$this->searchemail,$this->searchtelephone)
        ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        ->paginate($this->perPage)] );
    }

    public function updatingSearch(){
        $this->gotoPage(1);
    }


}
