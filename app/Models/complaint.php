<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    use HasFactory;
    public static function searchand(

$type,
$status,
$dateresolved,
$datereceived,
$dateclosed,
$datestarted,
$casenumber,
$company,
$title,
$description,
$attachments,
$comments,
$statushistory,
$audithistory
        ){
        return (
            empty($type)&&
            empty($status)&&
            empty($dateresolved)&&
            empty($datereceived)&&
            empty($dateclosed)&&
            empty($datestarted)&&
            empty($casenumber)&&
            empty($company)&&
            empty($title)&&
            empty($description)&&
            empty($attachments)&&
            empty($comments)&&
            empty($statushistory)&&
            empty($audithistory)
            ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['type', 'like', '%'.$type.'%'],
                        ['status', 'like', '%'.$status.'%'],
                        ['dateresolved', 'like', '%'.$dateresolved.'%'],
                        ['datereceived', 'like', '%'.$datereceived.'%'],
                        ['dateclosed', 'like', '%'.$dateclosed.'%'],
                        ['datestarted', 'like', '%'.$datestarted.'%'],
                        ['casenumber', 'like', '%'.$casenumber.'%'],
                        ['company', 'like', '%'.$company.'%'],
                        ['title', 'like', '%'.$title.'%'],
                        ['description', 'like', '%'.$description.'%'],
                        ['attachments', 'like', '%'.$attachments.'%'],
                        ['comments', 'like', '%'.$comments.'%'],
                        ['statushistory', 'like', '%'.$statushistory.'%'],
                        ['audithistory', 'like', '%'.$audithistory.'%'],

                    ]);

    }
}
