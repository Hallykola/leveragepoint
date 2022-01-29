<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renewlicenceone extends Model
{
    protected $table = 'renewlicenceone';
    protected $guarded = [];
    public static function searchand(
        $applicantname,
        $applicantadd,
        $appliedfor,
        $directors,
        $shareholders
        ){
        return (
            empty($applicantname)&&
            empty($applicantadd)&&
            empty($appliedfor)&&
            empty($directors)&&
            empty($shareholders)

            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['applicantname', 'like', '%'.$applicantname.'%'],
                        ['applicantadd', 'like', '%'.$applicantadd.'%'],
                        ['appliedfor', 'like', '%'.$appliedfor.'%'],
                        ['directors', 'like', '%'.$directors.'%'],
                        ['shareholders', 'like', '%'.$shareholders.'%'],

                    ]);


    }
}
