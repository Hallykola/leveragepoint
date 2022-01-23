<?php

namespace App\Http\Controllers;

use App\Models\Companys;
use App\Http\Requests\StoreCompanysRequest;
use App\Http\Requests\UpdateCompanysRequest;

class CompanysController extends Controller
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
     * @param  \App\Http\Requests\StoreCompanysRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanysRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companys  $companys
     * @return \Illuminate\Http\Response
     */
    public function show(Companys $companys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companys  $companys
     * @return \Illuminate\Http\Response
     */
    public function edit(Companys $companys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanysRequest  $request
     * @param  \App\Models\Companys  $companys
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanysRequest $request, Companys $companys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companys  $companys
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companys $companys)
    {
        //
    }
}
