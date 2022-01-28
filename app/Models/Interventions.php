<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interventions extends Model
{
    use HasFactory;
    public static function searchand(
        $interventiondate,
        $summary,
        $status
        ){
        return (
            empty($interventiondate)&&
            empty($summary)&&
            empty($status)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        ['interventiondate', 'like', '%'.$interventiondate.'%'],
                        ['summary', 'like', '%'.$summary.'%'],
                        ['status', 'like', '%'.$status.'%'],

                    ]);

    }
}
