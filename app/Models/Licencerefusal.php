<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencerefusal extends Model
{
    use HasFactory;
    public static function searchand(
        $refusalnumber,
        $refusaldate,
        $applicant,
        $status
        ){
        return (
            empty($refusalnumber)&&
            empty($refusaldate)&&
            empty($applicant)&&
            empty($status)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['refusalnumber', 'like', '%'.$refusalnumber.'%'],
                        ['refusaldate', 'like', '%'.$refusaldate.'%'],
                        ['applicant', 'like', '%'.$applicant.'%'],
                        ['status', 'like', '%'.$status.'%'],

                    ]);

    }
}
