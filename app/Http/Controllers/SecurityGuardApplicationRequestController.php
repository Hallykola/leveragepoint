<?php

namespace App\Http\Controllers;

use App\Models\SecurityGuardApplicationRequest;
use App\Http\Requests\StoreSecurityGuardApplicationRequestRequest;
use App\Http\Requests\UpdateSecurityGuardApplicationRequestRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SecurityGuardApplicationRequestController extends Controller
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
     * @param  \App\Http\Requests\StoreSecurityGuardApplicationRequestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecurityGuardApplicationRequestRequest $request)
    {
        //
        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        SecurityGuardApplicationRequest::create([
            'user_id'=>Auth::user()->id,
            'name'=>request()->input('name')?? '',
            'placeofbirth'=>request()->input('placeofbirth')?? '',
            'dateofbirth'=>request()->input('dateofbirth')?? '',
            'gender'=>request()->input('gender')?? '',
            'nationality'=> request()->input('nationality')??'',
            'omangnumber'=> request()->input('omangnumber')??'',
            'omangplaceofissue'=>request()->input('omangplaceofissue')?? '',
            'omangexpirydate'=>request()->input('omangexpirydate')?? '',
            'passportnumber'=>request()->input('passportnumber')?? '',
            'passportplaceofissue'=>request()->input('passportplaceofissue')?? '',
            'passportexpirydate'=> request()->input('passportexpirydate')??'',
            'residentialaddress'=> request()->input('residentialaddress')??'',
            'contactphone'=>request()->input('contactphone')?? '',
            'email'=>request()->input('email')?? '',
            'currentemployername'=>request()->input('currentemployername')?? '',
            'currentemployeraddress'=>request()->input('currentemployeraddress')?? '',
            'currentemployerpostaladdress'=>request()->input('currentemployerpostaladdress')?? '',
            'currentemployerphone'=>request()->input('currentemployerphone')?? '',
            'currentemployerfax'=>request()->input('currentemployerfax')?? '',
            'currentemployeremail'=>request()->input('currentemployeremail')?? '',

            'previousemployerdetails'=>request()->input('previousemployerdetails')?? '',
            'academicinfo'=> request()->input('academicinfo')??'',
            'exconvict'=> request()->input('exconvict')??'',
            'convictiondetails'=>request()->input('convictiondetails')?? '',
            'contactpersondetails'=>request()->input('contactpersondetails')?? '',

            'supervisorfullname'=>request()->input('supervisorfullname')?? '',
            'supervisoromangno'=>request()->input('supervisoromangno')?? '',
            'supervisorpassportno'=> request()->input('supervisorpassportno')??'',
            'supervisorlastaddress'=> request()->input('supervisorlastaddress')??'',
            'formeremployeepersonelno'=>request()->input('formeremployeepersonelno')?? '',
            'supervisorfullnameagain'=>request()->input('supervisorfullnameagain')?? '',

            'particularofservice'=>request()->input('particularofservice')?? '',
            'headofficestreetaddress'=>request()->input('headofficestreetaddress')?? '',
            'telephone'=> request()->input('telephone')??'',
            'fascimilenumber'=> request()->input('fascimilenumber')??'',
            'emailaddress'=>request()->input('emailaddress')?? '',
            'address'=> request()->input('address')??'',
            'postaladdress'=>request()->input('postaladdress')?? '',
            'dateoftermination'=> request()->input('dateoftermination')??'',
            'capacityemployedin'=>request()->input('capacityemployedin')?? '',
            'reasonfortermination'=> request()->input('reasonfortermination')??'',
            'formerparticularsofmisconduct'=>request()->input('formerparticularsofmisconduct')?? '',
            'disciplinaryproceedingdetail'=> request()->input('disciplinaryproceedingdetail')??'',
            'anothersupervisorsfullname'=>request()->input('anothersupervisorsfullname')?? '',
            'validid'=>request()->input('validid')?? '',
            'healthcertificate'=>request()->input('healthcertificate')?? '',
            'supportingdocuments'=>request()->input('supportingdocuments')?? '',
            'anotherfullname'=>request()->input('anotherfullname')?? '',
            'anotherfullnameposition'=>request()->input('anotherfullnameposition')?? '',
            'fullnameagain'=>request()->input('fullnameagain')?? '',

            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SecurityGuardApplicationRequest  $securityGuardApplicationRequest
     * @return \Illuminate\Http\Response
     */
    public function show(SecurityGuardApplicationRequest $securityGuardApplicationRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SecurityGuardApplicationRequest  $securityGuardApplicationRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(SecurityGuardApplicationRequest $securityGuardApplicationRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecurityGuardApplicationRequestRequest  $request
     * @param  \App\Models\SecurityGuardApplicationRequest  $securityGuardApplicationRequest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecurityGuardApplicationRequestRequest $request, SecurityGuardApplicationRequest $securityGuardApplicationRequest)
    {
        //
        //$securityGuardApplicationRequest = $securityGuardApplicationRequest;

        $vreq = request()->validate([
            //'user_id'=>'required',
            // 'profile_name'=> 'required',
            // 'role'=> 'required',

        ] );



        $securityGuardApplicationRequest->update([
            'user_id'=>Auth::user()->id,
            'name'=>request()->input('name')?? '',
            'placeofbirth'=>request()->input('placeofbirth')?? '',
            'dateofbirth'=>request()->input('dateofbirth')?? '',
            'gender'=>request()->input('gender')?? '',
            'nationality'=> request()->input('nationality')??'',
            'omangnumber'=> request()->input('omangnumber')??'',
            'omangplaceofissue'=>request()->input('omangplaceofissue')?? '',
            'omangexpirydate'=>request()->input('omangexpirydate')?? '',
            'passportnumber'=>request()->input('passportnumber')?? '',
            'passportplaceofissue'=>request()->input('passportplaceofissue')?? '',
            'passportexpirydate'=> request()->input('passportexpirydate')??'',
            'residentialaddress'=> request()->input('residentialaddress')??'',
            'contactphone'=>request()->input('contactphone')?? '',
            'email'=>request()->input('email')?? '',
            'currentemployername'=>request()->input('currentemployername')?? '',
            'currentemployeraddress'=>request()->input('currentemployeraddress')?? '',
            'currentemployerpostaladdress'=>request()->input('currentemployerpostaladdress')?? '',
            'currentemployerphone'=>request()->input('currentemployerphone')?? '',
            'currentemployerfax'=>request()->input('currentemployerfax')?? '',
            'currentemployeremail'=>request()->input('currentemployeremail')?? '',

            'previousemployerdetails'=>request()->input('previousemployerdetails')?? '',
            'academicinfo'=> request()->input('academicinfo')??'',
            'exconvict'=> request()->input('exconvict')??'',
            'convictiondetails'=>request()->input('convictiondetails')?? '',
            'contactpersondetails'=>request()->input('contactpersondetails')?? '',

            'supervisorfullname'=>request()->input('supervisorfullname')?? '',
            'supervisoromangno'=>request()->input('supervisoromangno')?? '',
            'supervisorpassportno'=> request()->input('supervisorpassportno')??'',
            'supervisorlastaddress'=> request()->input('supervisorlastaddress')??'',
            'formeremployeepersonelno'=>request()->input('formeremployeepersonelno')?? '',
            'supervisorfullnameagain'=>request()->input('supervisorfullnameagain')?? '',

            'particularofservice'=>request()->input('particularofservice')?? '',
            'headofficestreetaddress'=>request()->input('headofficestreetaddress')?? '',
            'telephone'=> request()->input('telephone')??'',
            'fascimilenumber'=> request()->input('fascimilenumber')??'',
            'emailaddress'=>request()->input('emailaddress')?? '',
            'address'=> request()->input('address')??'',
            'postaladdress'=>request()->input('postaladdress')?? '',
            'dateoftermination'=> request()->input('dateoftermination')??'',
            'capacityemployedin'=>request()->input('capacityemployedin')?? '',
            'reasonfortermination'=> request()->input('reasonfortermination')??'',
            'formerparticularsofmisconduct'=>request()->input('formerparticularsofmisconduct')?? '',
            'disciplinaryproceedingdetail'=> request()->input('disciplinaryproceedingdetail')??'',
            'anothersupervisorsfullname'=>request()->input('anothersupervisorsfullname')?? '',
            'validid'=>request()->input('validid')?? '',
            'healthcertificate'=>request()->input('healthcertificate')?? '',
            'supportingdocuments'=>request()->input('supportingdocuments')?? '',
            'anotherfullname'=>request()->input('anotherfullname')?? '',
            'anotherfullnameposition'=>request()->input('anotherfullnameposition')?? '',
            'fullnameagain'=>request()->input('fullnameagain')?? '',

            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SecurityGuardApplicationRequest  $securityGuardApplicationRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(SecurityGuardApplicationRequest $securityGuardApplicationRequest)
    {
        //
    }
}
