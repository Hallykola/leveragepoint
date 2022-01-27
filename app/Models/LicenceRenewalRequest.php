<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicenceRenewalRequest extends Model
{
    use HasFactory;
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
