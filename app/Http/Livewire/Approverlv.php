<?php

namespace App\Http\Livewire;

use App\Models\ChangeOwnershipRequests;
use Livewire\Component;
use App\Models\User;
// use App\Models\CompanyRequests;
use App\Models\Companies;
use App\Models\LicenceAmmendentRequest;
use App\Models\renewlicenceone;
use App\Models\Surrenderlicence;

class Approverlv extends Component
{
   public $form = '';
   public $status = '';
   public $type = '';

   protected $mymodel ;


    public function mount(){
        if($this->type=='NEW'){
            $this->mymodel = Companies::where('form',$this->form);
        }elseif($this->type=='RENEW'){
            $this->mymodel = renewlicenceone::where('form',$this->form);
        }elseif($this->type=='COFO'){
            $this->mymodel = ChangeOwnershipRequests::where('form',$this->form);
        }elseif($this->type=='SURRENDER'){
            $this->mymodel = Surrenderlicence::where('form',$this->form);
        }elseif($this->type=='AMMEND'){
            $this->mymodel = LicenceAmmendentRequest::where('form',$this->form);
        }
            $this->status =  $this->mymodel->first()->status;


    }

    public function render()
    {
        return view('livewire.approverlv');
    }



    public function approve(){
        if($this->type=='NEW'){
            $mymodel = Companies::where('form',$this->form);
        }elseif($this->type=='RENEW'){
            $mymodel = renewlicenceone::where('form',$this->form);
        }elseif($this->type=='COFO'){
            $mymodel = ChangeOwnershipRequests::where('form',$this->form);
        }elseif($this->type=='SURRENDER'){
            $mymodel = Surrenderlicence::where('form',$this->form);
        }elseif($this->type=='AMMEND'){
            $mymodel = LicenceAmmendentRequest::where('form',$this->form);
        }
            $mymodel->update(['status'=>'APPROVED']);
            $this->status = 'APPROVED';



    }
    public function decline(){
        if($this->type=='NEW'){
            $mymodel = Companies::where('form',$this->form);
        }elseif($this->type=='RENEW'){
            $mymodel = renewlicenceone::where('form',$this->form);
        }elseif($this->type=='COFO'){
            $mymodel = ChangeOwnershipRequests::where('form',$this->form);
        }elseif($this->type=='SURRENDER'){
            $mymodel = Surrenderlicence::where('form',$this->form);
        }elseif($this->type=='AMMEND'){
            $mymodel = LicenceAmmendentRequest::where('form',$this->form);
        }
        $mymodel->update(['status'=>'DECLINED']);
            $this->status = 'DECLINED';

    }

    public function pending(){

        if($this->type=='NEW'){
            $mymodel = Companies::where('form',$this->form);
        }elseif($this->type=='RENEW'){
            $mymodel = renewlicenceone::where('form',$this->form);
        }elseif($this->type=='COFO'){
            $mymodel = ChangeOwnershipRequests::where('form',$this->form);
        }elseif($this->type=='SURRENDER'){
            $mymodel = Surrenderlicence::where('form',$this->form);
        }elseif($this->type=='AMMEND'){
            $mymodel = LicenceAmmendentRequest::where('form',$this->form);
        }
        $mymodel->update(['status'=>'PENDING']);
            $this->status = 'PENDING';

    }
}
