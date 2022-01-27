<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionItems extends Model
{
    use HasFactory;
    public static function searchand($title,$tasknumber,$assignedto,$duedate ,$delegatedto,$status,$extra){
        return (empty($title) && empty($tasknumber)&&empty($assignedto)&&empty($duedate)&&empty($delegatedto) && empty($status) && empty($extra)) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        [' title' , 'like', '%'.$title .'%'],
                        [' tasknumber' , 'like', '%'.$tasknumber.'%'],
                        [' assignedto' , 'like', '%'.$assignedto.'%'],
                        [' duedate' , 'like', '%'.$duedate.'%'],
                        [' delegatedto' , 'like', '%'.$delegatedto.'%'],
                        [' status' , 'like', '%'.$status.'%'],
                        [' extra' , 'like', '%'.$extra.'%'],

                    ]);

    }
}
