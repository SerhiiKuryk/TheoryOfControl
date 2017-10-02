<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ahome(){
        return view('admins.ahome');
    }
}
