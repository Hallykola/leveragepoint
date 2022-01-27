<?php

namespace App\Http\Controllers;

use App\Models\Interventions;
use App\Http\Requests\StoreInterventionsRequest;
use App\Http\Requests\UpdateInterventionsRequest;

class InterventionsController extends Controller
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
     * @param  \App\Http\Requests\StoreInterventionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterventionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interventions  $interventions
     * @return \Illuminate\Http\Response
     */
    public function show(Interventions $interventions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interventions  $interventions
     * @return \Illuminate\Http\Response
     */
    public function edit(Interventions $interventions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterventionsRequest  $request
     * @param  \App\Models\Interventions  $interventions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterventionsRequest $request, Interventions $interventions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interventions  $interventions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interventions $interventions)
    {
        //
    }
}
