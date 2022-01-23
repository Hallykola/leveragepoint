<?php

namespace App\Http\Controllers;

use App\Models\Supports;
use App\Http\Requests\StoreSupportsRequest;
use App\Http\Requests\UpdateSupportsRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class SupportsController extends Controller
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
     * @param  \App\Http\Requests\StoreSupportsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupportsRequest $request)
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



       Supports::create([
            'user_id'=>Auth::user()->id,
            'title'=>request()->input('title')?? '',
            'category'=>request()->input('category')?? '',
            'description'=>request()->input('description')?? '',
            'images'=>request()->input('images')?? '',


            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supports  $supports
     * @return \Illuminate\Http\Response
     */
    public function show(Supports $supports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supports  $supports
     * @return \Illuminate\Http\Response
     */
    public function edit(Supports $supports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupportsRequest  $request
     * @param  \App\Models\Supports  $supports
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupportsRequest $request, Supports $supports)
    {
        //
        $support = $supports;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $support->update([
            'user_id'=>Auth::user()->id,
            'title'=>request()->input('title')?? '',
            'category'=>request()->input('category')?? '',
            'description'=>request()->input('description')?? '',
            'images'=>request()->input('images')?? '',


            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supports  $supports
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supports $supports)
    {
        //
    }
}
