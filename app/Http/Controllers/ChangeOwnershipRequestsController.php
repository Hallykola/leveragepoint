<?php

namespace App\Http\Controllers;

use App\Models\ChangeOwnershipRequests;
use App\Models\User;

use App\Http\Requests\StoreChangeOwnershipRequestsRequest;
use App\Http\Requests\UpdateChangeOwnershipRequestsRequest;
use App\Notifications\ChangeofOwnershipNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class ChangeOwnershipRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageTitle = 'Change of Ownership Applications';
        return view('listchangeownership',['pageTitle' => $pageTitle]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function create(Request $request)
    {
        $id = time();
        $this->store($request,$id);
        $pageTitle = 'Change of Ownership';
        return view('changeofownership',['form'=>$id,'pageTitle' => $pageTitle,'details'=>ChangeOwnershipRequests::where('form',$id)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChangeOwnershipRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {

          $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );
        $form = request()->input('form')?? $id;
        if(!ChangeOwnershipRequests::where('form',$form )->exists()){

        $idcard = MyHelper::saveimage('transfereeid');
        $clearance = MyHelper::saveimage('clearancecertificate');
        $otherdocs =MyHelper::saveimage('otherdocuments');


        ChangeOwnershipRequests::create([
            'user_id'=>Auth::user()->id,
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantaddress'=>request()->input('applicantaddress')?? '',
            'applicantfax'=>request()->input('applicantfax')?? '',
            'transfereeid'=> $idcard,
            'clearancecertificate'=> $clearance,
            'otherdocuments'=> $otherdocs,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'nameoftransferee'=> request()->input('nameoftransferee')??'',
            'licenceephysicaladdress'=> request()->input('licenceephysicaladdress')??'',
            'licenceepostaladdress'=>request()->input('licenceepostaladdress')?? '',
            'form'=>$id,

            ]);

        }

            // return redirect(route('viewchangeownership', ['appno' => $form]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pageTitle = 'View Application';

        $formdata = ChangeOwnershipRequests::where('form',$id)->first();

        return view('changeofownership',['form'=>$id,'pageTitle' => $pageTitle,'details'=> $formdata]);

        //return view('showchangeownershipform', ['myapplication'=>$myapplication, 'pageTitle'=>$pageTitle ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function edit(ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChangeOwnershipRequestsRequest  $request
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        //
        $changeOwnership = ChangeOwnershipRequests::where('form',request()->input('form'))->first();

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $changeOwnership->update([
            'user_id'=>Auth::user()->id,
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantaddress'=>request()->input('applicantaddress')?? '',
            'applicantfax'=>request()->input('applicantfax')?? '',
            'transfereeid'=>request()->input('transfereeid')??  $changeOwnership->transfereeid,
            'clearancecertificate'=> request()->input('clearancecertificate')??$changeOwnership->clearancecertificate,
            'otherdocuments'=> request()->input('otherdocuments')?? $changeOwnership->otherdocuments,
            // 'applicantname'=>request()->input('applicantname')?? '',
            // 'licencenumber'=>request()->input('licencenumber')?? '',
            // 'nameoftransferee'=> request()->input('nameoftransferee')??'',
            // 'licenceephysicaladdress'=> request()->input('licenceephysicaladdress')??'',
            // 'licenceepostaladdress'=>request()->input('licenceepostaladdress')?? '',
            'form'=>request()->input('form')?? '',

            ]);
            $form = request()->input('form');

            return redirect(route('changeownershipb', ['form' => $form]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
    }

    public function showform()
    {
        return view('changeofownership');
    }


    public function showb(Request $request)
    {
        $form = request()->input('form');
        $pageTitle = 'Change of Ownership B';

        return view('changeofownershipb',['form'=>$form, 'details'=>ChangeOwnershipRequests::where('form',$form)->first(), 'pageTitle'=>$pageTitle]);
    }
    public function updateb(Request $request){
        $change = ChangeOwnershipRequests::where('form',request()->input('form'));

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $change->update([
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'nameoftransferee'=> request()->input('nameoftransferee')??'',
            'licenceephysicaladdress'=> request()->input('licenceephysicaladdress')??'',
            'licenceepostaladdress'=>request()->input('licenceepostaladdress')?? '',
            'form'=>request()->input('form')?? '',

            ]);

            $user = Auth::user();
            Notification::send($user,new ChangeofOwnershipNotification($change));
            $admin = User::where('usertype','ADMIN')->get();
            Notification::send($admin,new ChangeofOwnershipNotification($change));

            $amount = '500';
            $form = request()->input('form')?? '';
            return redirect('/payment/'.$amount.'/'.$form);
    }
}
