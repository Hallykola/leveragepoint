<?php

namespace App\Http\Controllers;

use App\Models\ChangeOwnershipRequests;
use App\Http\Requests\StoreChangeOwnershipRequestsRequest;
use App\Http\Requests\UpdateChangeOwnershipRequestsRequest;
use Illuminate\Http\Request;
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




    public function create()
    {
        $pageTitle = 'Change of Ownership';
        return view('changeofownership',['pageTitle' => $pageTitle]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChangeOwnershipRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );

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
            'applicationnumber'=>request()->input('applicationnumber')?? '',

            ]);
            $applicationnumber = request()->input('applicationnumber');
            return redirect(route('viewchangeownership', ['appno' => $applicationnumber]));
            //return redirect(route('viewchangeownership/'.$applicationnumber));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function show($appno)
    {
        //
        $pageTitle = 'View Application';
        $myapplication = ChangeOwnershipRequests::where('applicationnumber',$appno)->first();
        return view('showchangeownershipform', ['myapplication'=>$myapplication, 'pageTitle'=>$pageTitle ]);
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
    public function update(UpdateChangeOwnershipRequestsRequest $request, ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
        $changeOwnershipRequest = $changeOwnershipRequests;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $changeOwnershipRequest->update([
            'user_id'=>Auth::user()->id,
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantaddress'=>request()->input('applicantaddress')?? '',
            'applicantfax'=>request()->input('applicantfax')?? '',
            'transfereeid'=>request()->input('transfereeid')?? '',
            'clearancecertificate'=> request()->input('clearancecertificate')??'',
            'otherdocuments'=> request()->input('otherdocuments')??'',
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'nameoftransferee'=> request()->input('nameoftransferee')??'',
            'licenceephysicaladdress'=> request()->input('licenceephysicaladdress')??'',
            'licenceepostaladdress'=>request()->input('licenceepostaladdress')?? '',
            'applicationnumber'=>request()->input('applicationnumber')?? '',

            ]);
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
}
