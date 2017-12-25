<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
    public function allCategoriesArticles(){
        $articles = DB::table('articles')->get();

        return view('categories.allCategories', [ 'articles' => $articles ]);
    }
    public function foodArticles(){
        $articles = DB::table('articles')->where('category_id', '1')->get();

        return view('categories.food', [ 'articles' => $articles ]);
    }
    public function funArticles(){
        $articles = DB::table('articles')->where('category_id', '3')->get();

        return view('categories.fun', [ 'articles' => $articles ]);
    }
    public function scienceArticles(){
        $articles = DB::table('articles')->where('category_id', '5')->get();

        return view('categories.science', [ 'articles' => $articles ]);
    }
    public function sportArticles(){
        $articles = DB::table('articles')->where('category_id', '4')->get();

        return view('categories.sport', [ 'articles' => $articles ]);
    }
    public function styleArticles(){
        $articles = DB::table('articles')->where('category_id', '4')->get();

        return view('categories.style', [ 'articles' => $articles ]);
    }
}
