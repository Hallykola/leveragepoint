<?php

namespace App\Http\Controllers;

use App\Models\Licences;
use App\Http\Requests\StoreLicencesRequest;
use App\Http\Requests\UpdateLicencesRequest;

class LicencesController extends Controller
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
     * @param  \App\Http\Requests\StoreLicencesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicencesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function show(Licences $licences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function edit(Licences $licences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicencesRequest  $request
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicencesRequest $request, Licences $licences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licences $licences)
    {
        //
    }
}
