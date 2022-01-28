<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licences extends Model
{
    use HasFactory;
    public static function searchand(
        $licencenumber,
        $licencedate,
        $applicant,
        $feepaid,
        $receiptnumber,
        $formid,
        $paymentid,
        $status
        ){
        return (
            empty($licencenumber)&&
            empty($licencedate)&&
            empty($applicant)&&
            empty($feepaid)&&
            empty($receiptnumber)&&
            empty($formid)&&
            empty($paymentid)&&
            empty($status)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['licencenumber', 'like', '%'.$licencenumber.'%'],
                        ['licencedate', 'like', '%'.$licencedate.'%'],
                        ['applicant', 'like', '%'.$applicant.'%'],
                        ['feepaid', 'like', '%'.$feepaid.'%'],
                        ['receiptnumber', 'like', '%'.$receiptnumber.'%'],
                        ['formid', 'like', '%'.$formid.'%'],
                        ['paymentid', 'like', '%'.$paymentid.'%'],
                        ['status', 'like', '%'.$status          .'%'],

                    ]);

    }
}
