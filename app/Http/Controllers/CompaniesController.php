<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Http\Requests\StoreCompaniesRequest;
use App\Http\Requests\UpdateCompaniesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class CompaniesController extends Controller
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
        $id = time();
        $this->store($request,$id);
        $pageTitle = 'Register a company';
        return view('registercompanya',['pageTitle' => $pageTitle, 'id'=>$id, 'details'=>Companies::where('form',$id)->first()]);
    }

    public function createwithid($id)
    {
        //

        $pageTitle = 'Register a company';
        return view('registercompanya',['pageTitle' => $pageTitle, 'id'=>$id,  'details'=>Companies::where('form',$id)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompaniesRequest  $request
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
        if(!Companies::where('form',$form )->exists()){


        Companies::create([
            'user_id'=>Auth::user()->id,
            'applicationnumber'=>request()->input('applicationnumber')?? '',
            'applicantname'=>request()->input('applicantname')?? '',
            'applicantadd'=>request()->input('applicantadd')?? '',
            'form'=>$form,
            'appliedfor'=>request()->input('appliedfor')?? '',
            'director1name'=> request()->input('director1name')??'',
            'director2name'=> request()->input('director2name')??'',
            'director1address'=> request()->input('director1address')??'',
            'director2address'=> request()->input('director2address')??'',
            'director1nationality'=> request()->input('director1nationality')??'',
            'director2nationality'=> request()->input('director2nationality')??'',
            'shareholder1name'=> request()->input('shareholder1name')??'',
            'shareholder2name'=> request()->input('shareholder2name')??'',
            'shareholder1address'=> request()->input('shareholder1address')??'',
            'shareholder2address'=> request()->input('shareholder2address')??'',
            'shareholder1nationality'=> request()->input('shareholder1nationality')??'',
            'shareholder2nationality'=> request()->input('shareholder2nationality')??'',

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $companies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompaniesRequest  $request
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $form = request()->input('form');
        $company = Companies::where('form',$form);

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );


        $company->update([
            'user_id'=>Auth::user()->id,
            'applicantname'=>request()->input('applicantname')?? '',
            'applicationnumber'=>request()->input('applicationnumber')?? '',
            'applicantadd'=>request()->input('applicantadd')?? '',
            'form'=>request()->input('form')?? '',
            'appliedfor'=>request()->input('appliedfor')?? '',
            'director1name'=> request()->input('director1name')??'',
            'director2name'=> request()->input('director2name')??'',
            'director1address'=> request()->input('director1address')??'',
            'director2address'=> request()->input('director2address')??'',
            'director1nationality'=> request()->input('director1nationality')??'',
            'director2nationality'=> request()->input('director2nationality')??'',
            'shareholder1name'=> request()->input('shareholder1name')??'',
            'shareholder2name'=> request()->input('shareholder2name')??'',
            'shareholder1address'=> request()->input('shareholder1address')??'',
            'shareholder2address'=> request()->input('shareholder2address')??'',
            'shareholder1nationality'=> request()->input('shareholder1nationality')??'',
            'shareholder2nationality'=> request()->input('shareholder2nationality')??'',

            ]);
            return redirect(route('registercompanyb', ['form' => $form]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        //
    }
}
