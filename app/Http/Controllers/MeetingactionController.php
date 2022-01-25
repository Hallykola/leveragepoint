<?php

namespace App\Http\Controllers;

use App\Models\Meetingaction;
use App\Http\Requests\StoreMeetingactionRequest;
use App\Http\Requests\UpdateMeetingactionRequest;

class MeetingactionController extends Controller
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
     * @param  \App\Http\Requests\StoreMeetingactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeetingactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meetingaction  $meetingaction
     * @return \Illuminate\Http\Response
     */
    public function show(Meetingaction $meetingaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meetingaction  $meetingaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Meetingaction $meetingaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeetingactionRequest  $request
     * @param  \App\Models\Meetingaction  $meetingaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeetingactionRequest $request, Meetingaction $meetingaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meetingaction  $meetingaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetingaction $meetingaction)
    {
        //
    }
}
