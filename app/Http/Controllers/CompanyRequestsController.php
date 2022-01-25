<?php

namespace App\Http\Controllers;

use App\Models\CompanyRequests;
use App\Http\Requests\StoreCompanyRequestsRequest;
use App\Http\Requests\UpdateCompanyRequestsRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class CompanyRequestsController extends Controller
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
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        CompanyRequests::create([
            'user_id'=>Auth::user()->id,
            'firstapplication'=>request()->input('firstapplication')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'prevlicencerejected'=>request()->input('prevlicencerejected')?? '',
            'prevlicencesurrendered'=>request()->input('prevlicencesurrendered')?? '',
            'prevlicencecancelled'=> request()->input('prevlicencecancelled')??'',
            'personsemployed'=> request()->input('personsemployed')??'',
            'valididurl'=>request()->input('valididurl')?? '',
            'taxclearanceurl'=>request()->input('taxclearanceurl')?? '',
            'otherdocumentsurl'=>request()->input('otherdocumentsurl')?? '',

            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyRequests $companyRequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyRequests $companyRequests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyRequestsRequest  $request
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequestsRequest $request, CompanyRequests $companyRequests)
    {
        //
        $companyrequest = $companyRequests;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $companyrequest->update([
            'user_id'=>Auth::user()->id,
            'firstapplication'=>request()->input('firstapplication')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'prevlicencerejected'=>request()->input('prevlicencerejected')?? '',
            'prevlicencesurrendered'=>request()->input('prevlicencesurrendered')?? '',
            'prevlicencecancelled'=> request()->input('prevlicencecancelled')??'',
            'personsemployed'=> request()->input('personsemployed')??'',
            'valididurl'=>request()->input('valididurl')?? '',
            'taxclearanceurl'=>request()->input('taxclearanceurl')?? '',
            'otherdocumentsurl'=>request()->input('otherdocumentsurl')?? '',

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyRequests $companyRequests)
    {
        //
    }
}
