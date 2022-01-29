<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\LicenceAmmendentRequest;
use App\Http\Requests\StoreLicenceAmmendentRequestRequest;
use App\Http\Requests\UpdateLicenceAmmendentRequestRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class LicenceAmmendentRequestController extends Controller
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
    public function create(Request $request)
    {
        //

        $id = time();
        $this->store($request,$id);
        $pageTitle = 'Ammendment of Licence';
        return view('ammendmentoflicence',['pageTitle' => $pageTitle, 'id'=>$id, 'details'=>LicenceAmmendentRequest::where('form',$id)->first()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLicenceAmmendentRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );


            $form = $id;
        LicenceAmmendentRequest::create([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'extra'=>request()->input('extra')?? '',
            'applicantphonenumber'=>request()->input('applicantphonenumber')?? '',
            'applicantemailaddress'=> request()->input('applicantemailaddress')??'',
            'applicantfax'=> request()->input('applicantfax')??'',
            'form'=> $id ,

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $licenceAmmendentRequest)
    {
        //
//$licenceAmmendentRequest = $licenceAmmendentRequest;
        $licence = LicenceAmmendentRequest::where('form',request()->input('form'))->first();

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $licence->update([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'extra'=>request()->input('extra')?? '',
            'applicantphonenumber'=>request()->input('applicantphonenumber')?? '',
            'applicantemailaddress'=> request()->input('applicantemailaddress')??'',
            'applicantfax'=> request()->input('applicantfax')??'',
            'form'=> request()->input('form')??'',

            ]);

            $amount = '300';
            $form = request()->input('form')?? '';
            return redirect('/payment/'.$amount.'/'.$form);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenceAmmendentRequestRequest  $request
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UpdateLicenceAmmendentRequestRequest $request, LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LicenceAmmendentRequest $licenceAmmendentRequest)
    {
        //
    }
}
