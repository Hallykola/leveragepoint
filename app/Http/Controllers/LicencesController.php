<?php

namespace App\Http\Controllers;

use App\Models\Licences;
use App\Http\Requests\StoreLicencesRequest;
use App\Http\Requests\UpdateLicencesRequest;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class LicencesController extends Controller
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
     * @param  \App\Http\Requests\StoreLicencesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicencesRequest $request)
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        Licences::create([
            'user_id'=>Auth::user()->id,
            'licencenumber'=>request()->input('licencenumber')?? '',
            'licencedate'=>request()->input('licencedate')?? '',
            'applicant'=>request()->input('applicant')?? '',
            'feepaid'=>request()->input('feepaid')?? '',
            'receiptnumber'=> request()->input('receiptnumber')??'',
            'formid'=> request()->input('formid')??'',
            'paymentid'=>request()->input('paymentid')?? '',

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function show(Licences $licences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function edit(Licences $licences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicencesRequest  $request
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicencesRequest $request, Licences $licences)
    {
        //
        $licence = $licences;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $licence->update([
            'user_id'=>Auth::user()->id,
            'licencenumber'=>request()->input('licencenumber')?? '',
            'licencedate'=>request()->input('licencedate')?? '',
            'applicant'=>request()->input('applicant')?? '',
            'feepaid'=>request()->input('feepaid')?? '',
            'receiptnumber'=> request()->input('receiptnumber')??'',
            'formid'=> request()->input('formid')??'',
            'paymentid'=>request()->input('paymentid')?? '',

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licences  $licences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licences $licences)
    {
        //
    }
}
