<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenceAmmendentRequest extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function searchand(
        $applicantname,
        $licencenumber,
        $extra,
        $applicantphonenumber,
        $applicantemailaddress,
        $applicantfax,
        $applicationnumber,
        $town,
        $submittedby,
        $applicationdate,
        $status,
        $applicant
        ){
        return (
        empty($applicantname)&&
        empty($licencenumber)&&
        empty($extra)&&
        empty($applicantphonenumber)&&
        empty($applicantemailaddress)&&
        empty($applicantfax)&&
        empty($applicationnumber)&&
        empty($town)&&
        empty($submittedby)&&
        empty($applicationdate)&&
        empty($status)&&
        empty($applicant)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        ['applicantname', 'like', '%'.$applicantname.'%'],
                        ['licencenumber', 'like', '%'.$licencenumber.'%'],
                        ['extra', 'like', '%'.$extra.'%'],
                        ['applicantphonenumber', 'like', '%'.$applicantphonenumber.'%'],
                        ['applicantemailaddress', 'like', '%'.$applicantemailaddress.'%'],
                        ['applicantfax', 'like', '%'.$applicantfax.'%'],
                        ['applicationnumber', 'like', '%'.$applicationnumber.'%'],
                        ['town', 'like', '%'.$town.'%'],
                        ['submittedby', 'like', '%'.$submittedby.'%'],
                        ['applicationdate', 'like', '%'.$applicationdate.'%'],
                        ['status', 'like', '%'.$status.'%'],
                        ['applicant', 'like', '%'.$applicant.'%'],

                    ]);

    }
}
