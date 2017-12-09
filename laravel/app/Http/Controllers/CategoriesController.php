<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function allCategories(){
        return view('categories.allCategories');
    }

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
    public function style(){
        return view('categories.style');
    }
}
