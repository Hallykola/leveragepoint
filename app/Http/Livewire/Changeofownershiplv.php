<?php

namespace App\Http\Livewire;

use App\Models\ChangeOwnershipRequests;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class Changeofownershiplv extends Component
{

    use WithPagination;
    protected $listeners= ['delete'];

    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public $applicationnumber = " ";
    public $applicantphone = " ";
    public $applicantaddress = " ";
    public $applicantfax = " ";
    public $aplicationdate = " ";
    public $status = " ";
    public $applicant = " ";

    public $transfereeid = " ";
    public $clearancecertificate = " ";
    public $otherdocuments = " ";
    public $applicantname = " ";
    public $licencenumber = " ";
    public $nameoftransferee = " ";
    public $licenceephysicaladdress = " ";
    public $licenceepostaladdress = " ";

    public function render()
    {
        return view('livewire.changeofownershiplv',
        ['transferoflicencerequests'=>DB::table('change_ownership_requests') ->paginate($this->perPage)]
        // ['transferoflicencerequests'=>ChangeOwnershipRequests::searchand($this->applicantphone, $this->applicantaddress,$this->applicantfax,$this->transfereeid,$this->clearancecertificate,$this->otherdocuments,$this->applicantname,$this->licencenumber,$this->nameoftransferee,$this->licenceephysicaladdress,$this->licenceepostaladdress)
        // ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
        // ->paginate($this->perPage)]
     );
    }
}
