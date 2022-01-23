<?php

namespace App\Http\Controllers;

use App\Models\ChangeOwnershipRequests;
use App\Http\Requests\StoreChangeOwnershipRequestsRequest;
use App\Http\Requests\UpdateChangeOwnershipRequestsRequest;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        ChangeOwnershipRequests::create([
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

            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChangeOwnershipRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChangeOwnershipRequestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function show(ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
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
}
