<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    public static function searchand(
        $name,
        $percentage,
        $sharenumber,
        $address,
        $contact,
        $nationality,
        $form,
        $extra
        ){
        return (
            empty($name)&&
            empty($percentage)&&
            empty($sharenumber)&&
            empty($address)&&
            empty($contact)&&
            empty($nationality)&&
            empty($form)&&
            empty($extra)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        ['name', 'like', '%'.$name.'%'],
                        ['percentage', 'like', '%'.$percentage.'%'],
                        ['sharenumber', 'like', '%'.$sharenumber.'%'],
                        ['address', 'like', '%'.$address.'%'],
                        ['contact', 'like', '%'.$contact.'%'],
                        ['nationality', 'like', '%'.$nationality.'%'],
                        ['form', 'like', '%'.$form.'%'],
                        ['extra', 'like', '%'.$extra.'%'],

                    ]);

    }
}
