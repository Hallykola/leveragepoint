<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function profile(){
        $user  = Auth::user();

        dd($user->notifications->count());
        return view('profile');
    }
}
