<?php

namespace App\Http\Controllers;

use App\Models\Surrenderlicence;
use App\Http\Requests\StoreSurrenderlicenceRequest;
use App\Http\Requests\UpdateSurrenderlicenceRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class SurrenderlicenceController extends Controller
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
     * @param  \App\Http\Requests\StoreSurrenderlicenceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSurrenderlicenceRequest $request)
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        Surrenderlicence::create([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'reasonsforsurrendering'=>request()->input('reasonsforsurrendering')?? '',
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantemail'=> request()->input('applicantemail')??'',
            'applicantfax'=> request()->input('applicantfax')??'',

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surrenderlicence  $surrenderlicence
     * @return \Illuminate\Http\Response
     */
    public function show(Surrenderlicence $surrenderlicence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surrenderlicence  $surrenderlicence
     * @return \Illuminate\Http\Response
     */
    public function edit(Surrenderlicence $surrenderlicence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSurrenderlicenceRequest  $request
     * @param  \App\Models\Surrenderlicence  $surrenderlicence
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSurrenderlicenceRequest $request, Surrenderlicence $surrenderlicence)
    {
        //
       // $surrenderlicence = $surrenderlicence ;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $surrenderlicence->update([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'reasonsforsurrendering'=>request()->input('reasonsforsurrendering')?? '',
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantemail'=> request()->input('applicantemail')??'',
            'applicantfax'=> request()->input('applicantfax')??'',

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surrenderlicence  $surrenderlicence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surrenderlicence $surrenderlicence)
    {
        //
    }
}
