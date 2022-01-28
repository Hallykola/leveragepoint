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
        $pageTittle = 'Dashboard';
        return view('dashBoard', ['pageTittle' => $pageTittle]);
    }

    public function profile(){
        $user  = Auth::user();
        $pageTittle = 'Profile';
        // dd($user->notifications->count());
        return view('profile',['pageTittle' => $pageTittle]);
    }

    public function Payments(){
        $pageTittle = 'Payments';
        return view('Payments',['pageTittle' => $pageTittle]);
    }

    public function Licences(){
        $pageTittle = 'Licences';
        return view('Licences',['pageTittle' => $pageTittle]);
    }

    public function Meetings(){
        $pageTittle = 'Meetings';
        return view('Meetings',['pageTittle' => $pageTittle]);
    }

    public function Reports(){
        $pageTittle = 'Reports';
        return view('Reports',['pageTittle' => $pageTittle]);
    }

    public function Support(){
        $pageTittle = 'Support';
        return view('Support',['pageTittle' => $pageTittle]);
    }
}
