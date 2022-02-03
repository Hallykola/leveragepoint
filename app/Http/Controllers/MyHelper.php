<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class MyHelper{

   static public function saveimage(String $filename){
        if(request()->hasFile($filename)&&request()->file($filename)->isValid()){
            $user = Auth::user();
            $userid = Auth::user()->id;
            $path = 'public/userimages/'.$userid;

            if(!File::exists($path)) {
                // path does not exist
                File::makeDirectory($path, $mode = 0777, true, true);

            }
            $filepath = request()->file($filename)->store($path);
            dd($filepath);
            return Storage::url($filepath);


        }else{

            return "";
        }



    }

   static public function removeImage(String $path, String $filename){
        // if($path!=null&&$path!=''&&$filename!=null&&$filename!=''){
        //     Storage::delete($path.'/'.$filename);
        // }
        Storage::delete($path.'/'.$filename);
    }
}
?>
