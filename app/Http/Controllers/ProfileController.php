<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{

    public function profiledetails(){
       // return view('profiledetails');
       $user  = Auth::user();
       if($user->profile==null){
           $this->store();
       }
       $pageTitle = 'Profile';
       return view('profile',['pageTitle' => $pageTitle, 'profiledetails'=>$user->profile]);
    }
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
        return view('profile');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // store(Request $request)
    public function store()
    {
        //
        $myprofile =  Auth::user()->profile;
        if($myprofile==null){

            Profile::create([
            'user_id'=>Auth::user()->id,
            'firstname'=> '',
            'lastname'=> '',
            'emailaddress'=> '',
            'state'=> '',
            'mobilenumber'=> '',
            'address1'=> '',
            'address2'=> '',
            'profilephoto'=> '',
            'gender'=>'',
            'taxclearanceurl'=>'',
            'valididurl'=>'',
            'healthcertificateurl'=>'',
            'accounttype'=>'',
            ]);


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //\
        $user  = Auth::user();
        if($user->profile==null){
            $this->store();
        }
        $pageTitle = 'Profile';
        return view('profile',['pageTitle' => $pageTitle, 'profiledetails'=>$user->profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        // dd($request);
        $this->store();
        //
        $myprofile =  Auth::user()->profile;

        $vreq = request()->validate([
        //     //'user_id'=>'required',
        //     // 'profile_name'=> 'required',
        //     // 'role'=> 'required',
        // 'firstname'=> '',
        // 'lastname'=> '',
        // 'emailaddress'=> '',
        // 'state'=> '',
        // 'mobilenumber'=> '',
        // 'address1'=> '',
        // 'address2'=> '',
        // 'profilephoto'=> '',
        // 'gender'=>'',
        // 'taxclearanceurl'=>'',
        // 'valididurl'=>'',
        // 'healthcertificateurl'=>'',
        // 'accounttype'=>'',

        ] );

        $valididurl = MyHelper::saveimage('valididurl');
        $profilephoto = MyHelper::saveimage('profilephoto');
        $taxclearanceurl  = MyHelper::saveimage('taxclearanceurl');
        $healthcertificateurl = MyHelper::saveimage('healthcertificateurl');
        $myprofile->update([
            'user_id'=>Auth::user()->id,
            'firstname'=>request()->input('firstname')?? '',
            'lastname'=>request()->input('lastname')?? '',
            'emailaddress'=>request()->input('emailaddress')?? '',
            'state'=>request()->input('state')?? '',
            'mobilenumber'=> request()->input('mobilenumber')??'',
            'address1'=> request()->input('address1')??'',
            'address2'=>request()->input('address2')?? '',
            'profilephoto'=>$profilephoto,
            'gender'=> request()->input('gender')??'',
            'taxclearanceurl'=> $taxclearanceurl ,
            'valididurl'=> $valididurl,
            'healthcertificateurl'=> $healthcertificateurl,
            'accounttype'=> request()->input('accounttype')??'',
            ]);

            $pageTitle = 'Profile';
        return view('profile',['pageTitle' => $pageTitle, 'profiledetails'=>$myprofile]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }



}

