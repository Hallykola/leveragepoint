<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        //return view('home');
        return redirect(route('dashboard'));
    }

    public function dashboard(Request $request){
        $pageTitle = 'Dashboard';
        // dd('Dashboard');
        return view('dashBoard', ['pageTitle' => $pageTitle]);
    }

    public function profile(){
        $user  = Auth::user();
        $pageTitle = 'Profile';
        // dd($user->notifications->count());
        return view('profile',['pageTitle' => $pageTitle]);
    }

    public function setuserrole (){
        return view('setuserrole',['pageTitle'=>'SET SYSTEM USER ROLE']);
    }

    public function setuserrolescript (Request $request){
        $email = request()->input('email');
        $user = User::where('email',$email)->first();
        $pageTitle = 'SET SYSTEM USER ROLE';
        if($user!=null){
            $user->update(['usertype'=>request()->input('role')]);
            return view('notify',['message'=>'Successfully changed user role','title'=>'User role changed','pageTitle'=>$pageTitle]);

        }
        return view('notify',['title'=>'Something went wrong','message'=>'No user exist for this email','pageTitle'=>$pageTitle]);

    }

    public function Payments(){
        $pageTitle = 'Payments';
        return view('Payments',['pageTitle' => $pageTitle]);
    }

    public function Licences(){
        $pageTitle = 'Licences';
        return view('Licences',['pageTitle' => $pageTitle]);
    }

    public function Meetings(){
        $pageTitle = 'Meetings';
        return view('Meetings',['pageTitle' => $pageTitle]);
    }

    public function Reports(){
        $pageTitle = 'Reports';
        return view('Reports',['pageTitle' => $pageTitle]);
    }

    public function Support(){
        $pageTitle = 'Support';
        return view('Support',['pageTitle' => $pageTitle]);
    }

    public function Requests(){
        $pageTitle = 'Requests';
        return view('Requests',['pageTitle' => $pageTitle]);
    }

    public function Training(){
        $pageTitle = 'Training';
        return view('Training',['pageTitle' => $pageTitle]);
    }

    public function HRM(){
        $pageTitle = 'HRM';
        return view('HRM',['pageTitle' => $pageTitle]);
    }
}
