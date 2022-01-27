<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeOwnershipRequests extends Model
{
    use HasFactory;
    public static function searchand(
        $applicantphone,
        $applicantaddress,
        $applicantfax,
        $transfereeid,
        $clearancecertificate,
        $otherdocuments,
        $applicantname,
        $licencenumber,
        $nameoftransferee,
        $licenceephysicaladdress,
        $licenceepostaladdress
        ){
        return (
           empty($applicantphone)&&
           empty($applicantaddress)&&
           empty($applicantfax)&&
           empty($transfereeid)&&
           empty($clearancecertificate)&&
           empty($otherdocuments)&&
           empty($applicantname)&&
           empty($licencenumber)&&
           empty($nameoftransferee)&&
           empty($licenceephysicaladdress)&&
           empty($licenceepostaladdres)
        ) ? static::query()  //->where('user_id', Auth::user()->id)
            :
            static::query()
                    ->where([
                        ['applicantphone', 'like', '%'.$applicantphone.'%'],
                        ['applicantaddress', 'like', '%'.$applicantaddress.'%'],
                        ['applicantfax', 'like', '%'.$applicantfax.'%'],
                        ['transfereeid', 'like', '%'.$transfereeid.'%'],
                        ['clearancecertificate', 'like', '%'.$clearancecertificate.'%'],
                        ['otherdocuments', 'like', '%'.$otherdocuments.'%'],
                        ['applicantname', 'like', '%'.$applicantname.'%'],
                        ['licencenumber', 'like', '%'.$licencenumber.'%'],
                        ['nameoftransferee', 'like', '%'.$nameoftransferee.'%'],
                        ['licenceephysicaladdress', 'like', '%'.$licenceephysicaladdress.'%'],
                        ['licenceepostaladdress', 'like', '%'.$licenceepostaladdress.'%'],
                    ]);

    }
}
