<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function food(){
        return view('categories.food');
    }
    public function fun(){
        return view('categories.fun');
    }
    public function science(){
        return view('categories.science');
    }
    public function sport(){
        return view('categories.sport');
    }
}