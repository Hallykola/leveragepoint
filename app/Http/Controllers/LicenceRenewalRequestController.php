<?php

namespace App\Http\Controllers;

use App\Models\LicenceRenewalRequest;
use App\Http\Requests\StoreLicenceRenewalRequestRequest;
use App\Http\Requests\UpdateLicenceRenewalRequestRequest;

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
