<?php

namespace App\Http\Controllers;

use App\Models\Actionplan;
use App\Http\Requests\StoreActionplanRequest;
use App\Http\Requests\UpdateActionplanRequest;

class ActionplanController extends Controller
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
     * @param  \App\Http\Requests\StoreActionplanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActionplanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actionplan  $actionplan
     * @return \Illuminate\Http\Response
     */
    public function show(Actionplan $actionplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actionplan  $actionplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Actionplan $actionplan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActionplanRequest  $request
     * @param  \App\Models\Actionplan  $actionplan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActionplanRequest $request, Actionplan $actionplan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actionplan  $actionplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actionplan $actionplan)
    {
        //
    }
}
