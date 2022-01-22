<?php

namespace App\Http\Controllers;

use App\Models\CompanyRequests;
use App\Http\Requests\StoreCompanyRequestsRequest;
use App\Http\Requests\UpdateCompanyRequestsRequest;

class CompanyRequestsController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanyRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyRequests $companyRequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyRequests $companyRequests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequestsRequest  $request
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequestsRequest $request, CompanyRequests $companyRequests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyRequests $companyRequests)
    {
        //
    }
}
