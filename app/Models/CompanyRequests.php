<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRequests extends Model
{
    use HasFactory;
    public static function searchand(
        $firstapplication,
        $licencenumber,
        $prevlicencerejected,
        $prevlicencesurrendered,
        $prevlicencecancelled,
        $personsemployed,
        $valididurl,
        $taxclearanceurl,
        $otherdocumentsurl
        ){
        return (
           empty($firstapplication)&&
           empty($licencenumber)&&
           empty($prevlicencerejected)&&
           empty($prevlicencesurrendered)&&
           empty($prevlicencecancelled)&&
           empty($personsemployed)&&
           empty($valididurl)&&
           empty($taxclearanceurl)&&
           empty($otherdocumentsurl)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['firstapplication', 'like', '%'.$firstapplication.'%'],
                        ['licencenumber', 'like', '%'.$licencenumber.'%'],
                        ['prevlicencerejected', 'like', '%'.$prevlicencerejected.'%'],
                        ['prevlicencesurrendered', 'like', '%'.$prevlicencesurrendered.'%'],
                        ['prevlicencecancelled', 'like', '%'.$prevlicencecancelled.'%'],
                        ['personsemployed', 'like', '%'.$personsemployed.'%'],
                        ['valididurl', 'like', '%'.$valididurl.'%'],
                        ['taxclearanceurl', 'like', '%'.$taxclearanceurl.'%'],
                        ['otherdocumentsurl', 'like', '%'.$otherdocumentsurl.'%'],

                    ]);

    }
}
