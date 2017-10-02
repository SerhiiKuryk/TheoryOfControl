<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class LoginController extends Controller
{
    function login(){
        return view('authentication.login');
    }

    function postLogin(Request $request){
        Sentinel::authenticate($request->all());

        $slug = Sentinel::getUser()->roles()->first()->slug;

        if($slug == 'admin')
            return redirect('/ahome');
        elseif ($slug == 'moderator')
                return redirect('/mhome');
        elseif ($slug == 'user')
                return redirect('/uhome');
    }

    function logout(){
        Sentinel::logout();
        return redirect('/login');
    }
}
