<?php

namespace App\Http\Controllers;

use App\Models\Meetings;
use App\Http\Requests\StoreMeetingsRequest;
use App\Http\Requests\UpdateMeetingsRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class MeetingsController extends Controller
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
     * @param  \App\Http\Requests\StoreMeetingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeetingsRequest $request)
    {
        //

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        Meetings::create([
            'user_id'=>Auth::user()->id,
            'meetingid'=>request()->input('meetingid')?? '',
            'meetingdate'=>request()->input('meetingdate')?? '',
            'purpose'=>request()->input('purpose')?? '',
            'status'=>request()->input('status')?? '',


            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function show(Meetings $meetings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function edit(Meetings $meetings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeetingsRequest  $request
     * @param  \App\Models\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeetingsRequest $request, Meetings $meetings)
    {
        //
        $meeting = $meetings;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $meeting->update([
            'user_id'=>Auth::user()->id,
            'meetingid'=>request()->input('meetingid')?? '',
            'meetingdate'=>request()->input('meetingdate')?? '',
            'purpose'=>request()->input('purpose')?? '',
            'status'=>request()->input('status')?? '',


            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meetings  $meetings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meetings $meetings)
    {
        //
    }
}
