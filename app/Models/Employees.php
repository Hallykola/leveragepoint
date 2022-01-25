<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    public static function search($search){
        return empty($search) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                 ->where('name', 'like', '%'.$search.'%')
                 ->orWhere('employmentnumber', 'like', '%'.$search.'%')
                 ->orWhere('position', 'like', '%'.$search.'%')
                 ->orWhere('email', 'like', '%'.$search.'%')
                ->orwhere('telephone', 'like', '%'.$search.'%');


    }


    public static function searchand($search,$searchname,$searchemploymentnumber,$searchposition ,$searchemail,$searchtelephone){
        return (empty($search) && empty($searchname)&&empty($searchemploymentnumber)&&empty($searchposition)&&empty($searchemail) && empty($searchtelephone)) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['name', 'like', '%'.$searchname.'%'],
                        ['employmentnumber', 'like', '%'.$searchemploymentnumber.'%'],
                        ['position', 'like', '%'.$searchposition.'%'],
                        ['email', 'like', '%'.$searchemail.'%'],
                        ['telephone', 'like', '%'.$searchtelephone.'%'],

                    ]);
               


    }
}
