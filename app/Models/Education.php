<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    public static function searchand(
        $form,
        $name,
        $period,
        $qualification
         ){
        return (
            empty($form)&&
            empty($name)&&
            empty($period)&&
            empty($qualification)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        ['form', 'like', '%'.$form.'%'],
                        ['name', 'like', '%'.$name.'%'],
                        ['period', 'like', '%'.$period.'%'],
                        ['qualification', 'like', '%'.$qualification.'%'],

                    ]);

    }
}
