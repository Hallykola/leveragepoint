<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenceRenewalRequest extends Model
{
    use HasFactory;
    public static function searchand(
        $licencenumber,
        $rejectedcancelledsurrendered,
        $numberofemployees,
        $validid,
        $taxclearance,
        $otherdocuments,
        $applicationnumber,
        $applicantname,
        $town,
        $submittedby,
        $applicationdate,
        $status,
        $applicant,
        $applicantaddress,
        $privateserviceappliedfor,
        $directorsofapplicant,
        $beneficialshareholders
        ){
        return (
            empty($licencenumber)&&
            empty($rejectedcancelledsurrendered)&&
            empty($numberofemployees)&&
            empty($validid)&&
            empty($taxclearance)&&
            empty($otherdocuments)&&
            empty($applicationnumber)&&
            empty($applicantname)&&
            empty($town)&&
            empty($submittedby)&&
            empty($applicationdate)&&
            empty($status)&&
            empty($applicant)&&
            empty($applicantname)&&
            empty($applicantaddress)&&
            empty($privateserviceappliedfor)&&
            empty($directorsofapplicant)&&
            empty($beneficialshareholders)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['licencenumber', 'like', '%'.$licencenumber.'%'],
                        ['rejectedcancelledsurrendered', 'like', '%'.$rejectedcancelledsurrendered.'%'],
                        ['numberofemployees', 'like', '%'.$numberofemployees.'%'],
                        ['validid', 'like', '%'.$validid.'%'],
                        ['taxclearance', 'like', '%'.$taxclearance.'%'],
                        ['otherdocuments', 'like', '%'.$otherdocuments.'%'],
                        ['applicationnumber', 'like', '%'.$applicationnumber.'%'],
                        ['applicantname', 'like', '%'.$applicantname.'%'],
                        ['town', 'like', '%'.$town.'%'],
                        ['submittedby', 'like', '%'.$submittedby.'%'],
                        ['applicationdate', 'like', '%'.$applicationdate.'%'],
                        ['status', 'like', '%'.$status.'%'],
                        ['applicant', 'like', '%'.$applicant.'%'],
                        ['applicantname', 'like', '%'.$applicantname.'%'],
                        ['applicantaddress', 'like', '%'.$applicantaddress.'%'],
                        ['privateserviceappliedfor', 'like', '%'.$privateserviceappliedfor.'%'],
                        ['directorsofapplicant', 'like', '%'.$directorsofapplicant.'%'],
                        ['beneficialshareholders', 'like', '%'.$beneficialshareholders       .'%'],

                    ]);

    }
}
