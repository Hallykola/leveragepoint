<?php

namespace App\Http\Controllers;

use App\Models\AgendaTopic;
use App\Http\Requests\StoreAgendaTopicRequest;
use App\Http\Requests\UpdateAgendaTopicRequest;

class AgendaTopicController extends Controller
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
     * @param  \App\Http\Requests\StoreAgendaTopicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgendaTopicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgendaTopic  $agendaTopic
     * @return \Illuminate\Http\Response
     */
    public function show(AgendaTopic $agendaTopic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgendaTopic  $agendaTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(AgendaTopic $agendaTopic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgendaTopicRequest  $request
     * @param  \App\Models\AgendaTopic  $agendaTopic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgendaTopicRequest $request, AgendaTopic $agendaTopic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgendaTopic  $agendaTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgendaTopic $agendaTopic)
    {
        //
    }
}
