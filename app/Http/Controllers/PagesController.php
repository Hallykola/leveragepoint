<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('home');
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
}
