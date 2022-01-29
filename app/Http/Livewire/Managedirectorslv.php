<?php

namespace App\Http\Livewire;

use App\Models\Director;
use Livewire\Component;

class Managedirectorslv extends Component
{
    public $formid = 0;
    public $value = 2;
    public function render()
    {
        return view('livewire.managedirectorslv',['value'=>$this->value,'directors'=> Director::where('form',$this->formid)->get()]);
    }


    public function createDirector(){
        $this->value  = $this->value+1;
        // Director::create([
        //     'name'=>'',
        //     'address'=>'',
        //     'nationality'=>'',
        //     'percentage'=>' ',
        //     'sharenumber'=>' ',
        //     'contact'=>' ',
        //     'nationality'=>' ',
        //     'form'=>' ',
        //     'extra'=>' '
        // ]);
    }

    public function deleteDirector($id){
        $director =  Director::find($id);
       $director->delete;
    }

    public function editName($id,$value){
       $director =  Director::find($id);
       $director->name = $value;

    }
    public function editAddress($id,$value){
    $director =  Director::find($id);
       $director->address = $value;
    }
    public function editNationality($id,$value){
        $director =  Director::find($id);
        $director->nationality = $value;
    }
}
