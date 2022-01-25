<?php

namespace App\Http\Controllers;

use App\Models\Shareholders;
use App\Http\Requests\StoreShareholdersRequest;
use App\Http\Requests\UpdateShareholdersRequest;

class ShareholdersController extends Controller
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
     * @param  \App\Http\Requests\StoreShareholdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShareholdersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shareholders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function show(Shareholders $shareholders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shareholders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function edit(Shareholders $shareholders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShareholdersRequest  $request
     * @param  \App\Models\Shareholders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShareholdersRequest $request, Shareholders $shareholders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shareholders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shareholders $shareholders)
    {
        //
    }
}
