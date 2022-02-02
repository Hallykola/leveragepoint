<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\renewlicencetwo;
use App\Notifications\RenewLicenceNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;


class RenewlicencetwoController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageTitle = 'Company Applications';
        return view('listofrenewalb',['pageTitle' => $pageTitle]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $id = request()->input('form'); //time();
        $this->store($request,$id);
        $pageTitle = 'Renew licence (continued)';
        return view('renewlicenceb',['pageTitle' => $pageTitle, 'id'=>$id, 'details'=>renewlicencetwo::where('form',$id)->first()]);

    }

    public function createwithid($form)
    {
        //

        $pageTitle = 'Renew licence  (continued)';
        return view('renewlicenceb',['pageTitle' => $pageTitle, 'id'=>$form,  'details'=>renewlicencetwo::where('form',$form)->first()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyRequestsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );

            $form = request()->input('form')?? $id;
            if(!renewlicencetwo::where('form',$form )->exists()){


        renewlicencetwo::create([
            'user_id'=>Auth::user()->id,
            'form'=>$form,
            //'status'=>'WAITING',
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function show(Request $companyRequests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyRequests  $companyRequests
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $companyRequests)
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
    public function update(Request $request)
    {
        //
        $renewlicencetwo = renewlicencetwo::where('form',request()->input('form'))->first();

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );

        $idcard = MyHelper::saveimage('valididurl');
        $clearance = MyHelper::saveimage('taxclearanceurl');
        $otherdocs =MyHelper::saveimage('otherdocumentsurl');

        $renewlicencetwo->update([
            'user_id'=>Auth::user()->id,
            //'status'=>'WAITING',
            'form'=>request()->input('form')?? '',
            'firstapplication'=>request()->input('firstapplication')?? '',
            'licencenumber'=>request()->input('licencenumber')?? '',
            'prevlicencerejected'=>request()->input('prevlicencerejected')?? '',
            'prevlicencesurrendered'=>request()->input('prevlicencesurrendered')?? '',
            'prevlicencecancelled'=> request()->input('prevlicencecancelled')??'',
            'personsemployed'=> request()->input('personsemployed')??'',
            'valididurl'=>$idcard,
            'taxclearanceurl'=>$clearance,
            'otherdocumentsurl'=>$otherdocs,

            ]);

            $user = Auth::user();
            Notification::send($user,new RenewLicenceNotification($renewlicencetwo));

            $amount = '500';
            $form = request()->input('form')?? '';
            return redirect('/payment/'.$amount.'/'.$form);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\renewlicences  $renewlicences
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $renewlicences)
    {
        //
    }
}
