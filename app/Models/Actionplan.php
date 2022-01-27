<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actionplan extends Model
{
    use HasFactory;
    public static function searchand(
        $assesmentno,
        $status,
        $businessid,
        $interventiondate,
        $interventiontype,
        $summary,
        $template,
        $details,
        $actionitems,
        $attachments,
        $comments,
        $statushistory,
        $audithistory){

            return (empty($search) && empty($searchname)&&empty($searchemploymentnumber)&&empty($searchposition)&&empty($searchemail) && empty($searchtelephone)) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([

                        ['assesmentno', 'like', '%'.$assesmentno.'%'],
                        ['status', 'like', '%'.$status.'%'],
                        ['businessid', 'like', '%'.$businessid.'%'],
                        ['interventiondate', 'like','%'.$interventiondate.'%'],
                        ['interventiontype', 'like', '%'.$interventiontype .'%'],
                        ['summary', 'like', '%'.$summary.'%'],
                        ['template', 'like', '%'.$template.'%'],
                        ['details', 'like', '%'.$details.'%'],
                        ['actionitems', 'like', '%'.$actionitems.'%'],
                        ['attachments', 'like', '%'.$attachments.'%'],
                        ['comments', 'like', '%'.$comments.'%'],
                        ['statushistory', 'like', '%'.$statushistory.'%'],
                        ['audithistory', 'like', '%'.$audithistory.'%'],

                    ]);

    }
}
