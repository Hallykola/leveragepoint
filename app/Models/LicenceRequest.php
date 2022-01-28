<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenceRequest extends Model
{
    use HasFactory;
    public static function searchand(
        $type,
        $applicationnumber,
        $applicantname,
        $town,
        $submittedby,
        $applicationdate,
        $status,
        $applicant
        ){
        return (
            empty($type)&&
            empty($applicationnumber)&&
            empty($applicantname)&&
            empty($town)&&
            empty($submittedby)&&
            empty($applicationdate)&&
            empty($status)&&
            empty($applicant)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['type', 'like', '%'.$type.'%'],
                        ['applicationnumber', 'like', '%'.$applicationnumber.'%'],
                        ['applicantname', 'like', '%'.$applicantname.'%'],
                        ['town', 'like', '%'.$town.'%'],
                        ['submittedby', 'like', '%'.$submittedby.'%'],
                        ['applicationdate', 'like', '%'.$applicationdate.'%'],
                        ['status', 'like', '%'.$status.'%'],
                        ['applicant', 'like', '%'.$applicant.'%'],

                    ]);

    }
}
