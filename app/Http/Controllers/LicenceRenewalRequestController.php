<?php

namespace App\Http\Controllers;

use App\Models\LicenceRenewalRequest;
use App\Http\Requests\StoreLicenceRenewalRequestRequest;
use App\Http\Requests\UpdateLicenceRenewalRequestRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class LicenceRenewalRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreLicenceRenewalRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenceRenewalRequestRequest $request)
    {
        //

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        LicenceRenewalRequest::create([
            'user_id'=>Auth::user()->id,
            'licencenumber'=>request()->input('licencenumber')?? '',
            'rejectedcancelledsurrendered'=>request()->input('rejectedcancelledsurrendered')?? '',
            'numberofemployees'=>request()->input('numberofemployees')?? '',
            'validid'=>request()->input('validid')?? '',
            'taxclearance'=> request()->input('taxclearance')??'',
            'otherdocuments'=> request()->input('otherdocuments')??'',
            'applicantname'=>request()->input('applicantname')?? '',
            'applicantaddress'=>request()->input('applicantaddress')?? '',
            'privateserviceappliedfor'=>request()->input('privateserviceappliedfor')?? '',
            'directorsofapplicant'=> request()->input('directorsofapplicant')??'',
            'beneficialshareholders'=> request()->input('beneficialshareholders')??'',

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenceRenewalRequest  $licenceRenewalRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LicenceRenewalRequest $licenceRenewalRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenceRenewalRequest  $licenceRenewalRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenceRenewalRequest $licenceRenewalRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenceRenewalRequestRequest  $request
     * @param  \App\Models\LicenceRenewalRequest  $licenceRenewalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenceRenewalRequestRequest $request, LicenceRenewalRequest $licenceRenewalRequest)
    {
        //
        //$licenceRenewalRequest = $licenceRenewalRequest;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $licenceRenewalRequest->update([
            'user_id'=>Auth::user()->id,
            'licencenumber'=>request()->input('licencenumber')?? '',
            'rejectedcancelledsurrendered'=>request()->input('rejectedcancelledsurrendered')?? '',
            'numberofemployees'=>request()->input('numberofemployees')?? '',
            'validid'=>request()->input('validid')?? '',
            'taxclearance'=> request()->input('taxclearance')??'',
            'otherdocuments'=> request()->input('otherdocuments')??'',
            'applicantname'=>request()->input('applicantname')?? '',
            'applicantaddress'=>request()->input('applicantaddress')?? '',
            'privateserviceappliedfor'=>request()->input('privateserviceappliedfor')?? '',
            'directorsofapplicant'=> request()->input('directorsofapplicant')??'',
            'beneficialshareholders'=> request()->input('beneficialshareholders')??'',

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenceRenewalRequest  $licenceRenewalRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenceRenewalRequest $licenceRenewalRequest)
    {
        //
    }
}
