<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetingaction extends Model
{
    use HasFactory;
    public static function searchand(
        $topic,
        $responsible,
        $deadline,
        $meeting
        ){
        return (
            empty($topic)&&
            empty($responsible)&&
            empty($deadline)&&
            empty($meeting)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['topic', 'like', '%'.$topic.'%'],
                        ['responsible', 'like', '%'.$responsible.'%'],
                        ['deadline', 'like', '%'.$deadline.'%'],
                        ['meeting', 'like', '%'.$meeting     .'%'],


                    ]);

    }
}
