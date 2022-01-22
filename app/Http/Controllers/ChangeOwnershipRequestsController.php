<?php

namespace App\Http\Controllers;

use App\Models\ChangeOwnershipRequests;
use App\Http\Requests\StoreChangeOwnershipRequestsRequest;
use App\Http\Requests\UpdateChangeOwnershipRequestsRequest;

class ChangeOwnershipRequestsController extends Controller
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
     * @param  \App\Http\Requests\StoreChangeOwnershipRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChangeOwnershipRequestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function show(ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function edit(ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChangeOwnershipRequestsRequest  $request
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChangeOwnershipRequestsRequest $request, ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChangeOwnershipRequests  $changeOwnershipRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangeOwnershipRequests $changeOwnershipRequests)
    {
        //
    }
}
