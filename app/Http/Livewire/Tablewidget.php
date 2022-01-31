<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
class Tablewidget extends Component
{
    use WithPagination;
    protected $listeners= ['delete'];

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    public $tablename ;
    public $datacolumns;
    public $headings;
    public $link;
    public $style;


    public function render()
    {
        return view('livewire.tablewidget',
        ['data'=> DB::table($this->tablename)->paginate($this->perPage),'datacolumn'=>$this->datacolumns, 'heading'=>$this->headings]

    );
    }
}
