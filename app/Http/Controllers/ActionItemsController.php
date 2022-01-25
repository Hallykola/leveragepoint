<?php

namespace App\Http\Controllers;

use App\Models\ActionItems;
use App\Http\Requests\StoreActionItemsRequest;
use App\Http\Requests\UpdateActionItemsRequest;

class ActionItemsController extends Controller
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
     * @param  \App\Http\Requests\StoreActionItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActionItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ActionItems  $actionItems
     * @return \Illuminate\Http\Response
     */
    public function show(ActionItems $actionItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ActionItems  $actionItems
     * @return \Illuminate\Http\Response
     */
    public function edit(ActionItems $actionItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActionItemsRequest  $request
     * @param  \App\Models\ActionItems  $actionItems
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActionItemsRequest $request, ActionItems $actionItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ActionItems  $actionItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActionItems $actionItems)
    {
        //
    }
}
