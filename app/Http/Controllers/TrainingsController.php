<?php

namespace App\Http\Controllers;

use App\Models\Trainings;
use App\Http\Requests\StoreTrainingsRequest;
use App\Http\Requests\UpdateTrainingsRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class TrainingsController extends Controller
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
     * @param  \App\Http\Requests\StoreTrainingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainingsRequest $request)
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        Trainings::create([
            'user_id'=>Auth::user()->id,
            'module'=>request()->input('module')?? '',
            'title'=>request()->input('title')?? '',
            'status'=>request()->input('status')?? '',


            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainings  $trainings
     * @return \Illuminate\Http\Response
     */
    public function show(Trainings $trainings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainings  $trainings
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainings $trainings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrainingsRequest  $request
     * @param  \App\Models\Trainings  $trainings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrainingsRequest $request, Trainings $trainings)
    {
        //
        $training = $trainings;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $training->update([
            'user_id'=>Auth::user()->id,
            'module'=>request()->input('module')?? '',
            'title'=>request()->input('title')?? '',
            'status'=>request()->input('status')?? '',


            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainings  $trainings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainings $trainings)
    {
        //
    }
}
