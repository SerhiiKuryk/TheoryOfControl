<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('authentication.register');
    }

    public function postRegister(Request $request)
    {
        $user = Sentinel::registerAndActivate($request->all());
        $role = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);
        return redirect('/');
    }
}
