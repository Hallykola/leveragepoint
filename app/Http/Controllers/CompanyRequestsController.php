<?php

namespace App\Http\Controllers;

use App\Models\CompanyRequests;
use App\Http\Requests\StoreCompanyRequestsRequest;
use App\Http\Requests\UpdateCompanyRequestsRequest;
use App\Models\User;
use App\Notifications\NewLicenceNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;


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
        $pageTitle = 'Company Applications';
        return view('listofcompanies',['pageTitle' => $pageTitle]);

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
        $pageTitle = 'Register a company (continued)';
        return view('registercompanyb',['pageTitle' => $pageTitle, 'id'=>$id, 'details'=>CompanyRequests::where('form',$id)->first()]);

    }

    public function createwithid($form)
    {
        //

        $pageTitle = 'Register a company  (continued)';
        return view('registercompanyb',['pageTitle' => $pageTitle, 'id'=>$form,  'details'=>CompanyRequests::where('form',$form)->first()]);
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
            if(!CompanyRequests::where('form',$form )->exists()){


        CompanyRequests::create([
            'user_id'=>Auth::user()->id,
            'form'=>$form,
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
    public function update(Request $request)
    {
        //
        $companyrequest = CompanyRequests::where('form',request()->input('form'))->first();

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );

        $idcard = MyHelper::saveimage('valididurl');
        $clearance = MyHelper::saveimage('taxclearanceurl');
        $otherdocs =MyHelper::saveimage('otherdocumentsurl');

        $companyrequest->update([
            'user_id'=>Auth::user()->id,
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
            if (Auth::user()->usertype == 'ADMIN') {
                $admin = User::where('usertype','ADMIN')->get();
                Notification::send($admin,new NewLicenceNotification($companyrequest));
            } else {
                $user = Auth::user();
                Notification::send($user,new NewLicenceNotification($companyrequest));
            }

            $amount = '500';
            $form = request()->input('form')?? '';
            return redirect('/payment/'.$amount.'/'.$form);
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
