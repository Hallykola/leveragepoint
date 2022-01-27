<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaTopic extends Model
{
    use HasFactory;
    public static function searchand(
            $topic,
            $presenter,
            $conclusion,
            $discussion,
            $listofactionitems
        ){
        return (empty($topic) && empty($presenter)&&empty($conclusion)&&empty($discussion)&&empty($listofactionitems)) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        [' topic', 'like', '%'.$topic .'%'],
                        [' presenter', 'like', '%'.$presenter.'%'],
                        [' conclusion', 'like', '%'.$conclusion.'%'],
                        ['discussion', 'like', '%'.$discussion .'%'],
                        ['listofactionitems', 'like','%'.$listofactionitems.'%'],

                    ]);

    }
}
