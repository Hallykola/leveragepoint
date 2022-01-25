<?php

namespace App\Http\Controllers;

use App\Models\EmployerDetails;
use App\Http\Requests\StoreEmployerDetailsRequest;
use App\Http\Requests\UpdateEmployerDetailsRequest;

class EmployerDetailsController extends Controller
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
     * @param  \App\Http\Requests\StoreEmployerDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployerDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployerDetails  $employerDetails
     * @return \Illuminate\Http\Response
     */
    public function show(EmployerDetails $employerDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployerDetails  $employerDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployerDetails $employerDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployerDetailsRequest  $request
     * @param  \App\Models\EmployerDetails  $employerDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployerDetailsRequest $request, EmployerDetails $employerDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployerDetails  $employerDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployerDetails $employerDetails)
    {
        //
    }
}
