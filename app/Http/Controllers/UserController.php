<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function home(){

        if (Auth::user()->user_role == 1)
        {
            return redirect()->route('dashboard_admin');
        
        }
        else{

            return view('user.dashboard');
        }
            return view('admin.dashboard');
    
    }

}
