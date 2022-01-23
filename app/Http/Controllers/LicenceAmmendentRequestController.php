<?php

namespace App\Http\Controllers;

use App\Models\LicenceAmmendentRequest;
use App\Http\Requests\StoreLicenceAmmendentRequestRequest;
use App\Http\Requests\UpdateLicenceAmmendentRequestRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class LicenceAmmendentRequestController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLicenceAmmendentRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenceAmmendentRequestRequest $request)
    {
        //

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        LicenceAmmendentRequest::create([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'extra'=>request()->input('extra')?? '',
            'applicantphonenumber'=>request()->input('applicantphonenumber')?? '',
            'applicantemailaddress'=> request()->input('applicantemailaddress')??'',
            'applicantfax'=> request()->input('applicantfax')??'',

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
        //$licenceAmmendentRequest = $licenceAmmendentRequest;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $licenceAmmendentRequest->update([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'extra'=>request()->input('extra')?? '',
            'applicantphonenumber'=>request()->input('applicantphonenumber')?? '',
            'applicantemailaddress'=> request()->input('applicantemailaddress')??'',
            'applicantfax'=> request()->input('applicantfax')??'',

            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenceAmmendentRequestRequest  $request
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenceAmmendentRequestRequest $request, LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
    }
}
