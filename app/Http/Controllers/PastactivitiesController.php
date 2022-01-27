<?php

namespace App\Http\Controllers;

use App\Models\Pastactivities;
use App\Http\Requests\StorePastactivitiesRequest;
use App\Http\Requests\UpdatePastactivitiesRequest;

class PastactivitiesController extends Controller
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
     * @param  \App\Http\Requests\StorePastactivitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePastactivitiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pastactivities  $pastactivities
     * @return \Illuminate\Http\Response
     */
    public function show(Pastactivities $pastactivities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pastactivities  $pastactivities
     * @return \Illuminate\Http\Response
     */
    public function edit(Pastactivities $pastactivities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePastactivitiesRequest  $request
     * @param  \App\Models\Pastactivities  $pastactivities
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePastactivitiesRequest $request, Pastactivities $pastactivities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pastactivities  $pastactivities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pastactivities $pastactivities)
    {
        //
    }
}
