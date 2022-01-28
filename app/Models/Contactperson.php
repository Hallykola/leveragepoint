<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactperson extends Model
{
    protected $table = 'contactpeople';
    use HasFactory;
    public static function searchand(
        $name,
        $address,
        $contact,
        $nationality,
        $form,
        $extra
        ){
        return (
        empty($name)&&
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
                        ['address', 'like', '%'.$address.'%'],
                        ['contact', 'like', '%'.$contact.'%'],
                        ['nationality', 'like', '%'.$nationality.'%'],
                        ['form', 'like', '%'.$form.'%'],
                        ['extra', 'like', '%'.$extra.'%'],

                    ]);

    }
}
