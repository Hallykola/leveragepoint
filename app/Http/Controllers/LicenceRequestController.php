<?php

namespace App\Http\Controllers;

use App\Models\LicenceRequest;
use App\Http\Requests\StoreLicenceRequestRequest;
use App\Http\Requests\UpdateLicenceRequestRequest;

class LicenceRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreLicenceRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenceRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenceRequest  $licenceRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LicenceRequest $licenceRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenceRequest  $licenceRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LicenceRequest $licenceRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenceRequestRequest  $request
     * @param  \App\Models\LicenceRequest  $licenceRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenceRequestRequest $request, LicenceRequest $licenceRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenceRequest  $licenceRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenceRequest $licenceRequest)
    {
        //
    }
}
