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
        //
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
        $this->store();
        //
        $myprofile =  Auth::user()->profile->refresh();

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

        $valididurl = $this->saveimage('valididurl');
        
        $myprofile->update([
            'user_id'=>Auth::user()->id,
            'firstname'=>request()->input('firstname')?? '',
            'lastname'=>request()->input('lastname')?? '',
            'emailaddress'=>request()->input('emailaddress')?? '',
            'state'=>request()->input('state')?? '',
            'mobilenumber'=> request()->input('mobilenumber')??'',
            'address1'=> request()->input('address1')??'',
            'address2'=>request()->input('address2')?? '',
            'profilephoto'=>request()->input('profilephoto')?? '',
            'gender'=> request()->input('gender')??'',
            'taxclearanceurl'=> request()->input('taxclearanceurl')??'',
            'valididurl'=> $valididurl,
            'healthcertificateurl'=> request()->input('healthcertificateurl')??'',
            'accounttype'=> request()->input('accounttype')??'',
            ]);


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

    public function saveimage(String $filename){
        print_r('in image saver for:'.$filename);
        if(request()->hasFile($filename)&&request()->file($filename)->isValid()){
            $user = Auth::user();
            $userid = Auth::user()->id;
            $path = 'public/userimages/'.$userid;

            print_r('file name dey'.$filename);
            if(!File::exists($path)) {
                // path does not exist
                print_r("path no dey");
                File::makeDirectory($path, $mode = 0777, true, true);

            }

            $filepath = request()->file($filename)->store($path);
            return $filepath;


        }else{

            return "";
        }



    }

    public function removeImage(String $path, String $filename){
        // if($path!=null&&$path!=''&&$filename!=null&&$filename!=''){
        //     Storage::delete($path.'/'.$filename);
        // }
        Storage::delete($path.'/'.$filename);
    }
}

