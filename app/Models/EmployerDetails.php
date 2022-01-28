<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerDetails extends Model
{
    use HasFactory;
    public static function searchand(
        $form,
        $name,
        $period,
        $address
        ){
        return (
            empty($form)&&
            empty($name)&&
            empty($period)&&
            empty($address)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        ['form', 'like', '%'.$form.'%'],
                        ['name', 'like', '%'.$name.'%'],
                        ['period', 'like', '%'.$period.'%'],
                        ['address', 'like', '%'.$address.'%'],

                    ]);

    }
}
