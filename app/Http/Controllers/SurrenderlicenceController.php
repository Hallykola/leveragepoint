<?php

namespace App\Http\Controllers;

use App\Models\Surrenderlicence;
use App\Http\Requests\StoreSurrenderlicenceRequest;
use App\Http\Requests\UpdateSurrenderlicenceRequest;
use App\Models\User;
use App\Notifications\SurrenderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;



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
        $pageTitle = 'Surrender of Licence Applications';
        return view('licencesurrender',['pageTitle' => $pageTitle]);
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
        $pageTitle = 'Surrender Licence';
        return view('surrenderoflicence',['pageTitle' => $pageTitle, 'id'=>$id, 'details'=>SurrenderLicence::where('form',$id)->first()]);

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
        SurrenderLicence::create([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'reasonsforsurrendering'=>request()->input('reasonsforsurrendering')?? '',
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantemail'=> request()->input('applicantemail')??'',
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
    public function show($id)
    {
        //
        $pageTitle = 'Show Surrender Licence';
        return view('surrenderoflicence',['pageTitle' => $pageTitle, 'id'=>$id, 'details'=>SurrenderLicence::where('form',$id)->first()]);

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
        $licence = SurrenderLicence::where('form',request()->input('form'))->first();

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $licence->update([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'reasonsforsurrendering'=>request()->input('reasonsforsurrendering')?? '',
            'applicantphone'=>request()->input('applicantphone')?? '',
            'applicantemail'=> request()->input('applicantemail')??'',
            'applicantfax'=> request()->input('applicantfax')??'',
            'form'=> request()->input('form')??'',

            ]);
            $user = Auth::user();
            Notification::send($user,new SurrenderNotification($licence));

            $user = User::where('usertype','ADMIN')->get();
            
            Notification::send($user,new SurrenderNotification($licence));

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
    public function edit(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LicenceAmmendentRequest  $licenceAmmendentRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $licenceAmmendentRequest)
    {
        //
    }
}
