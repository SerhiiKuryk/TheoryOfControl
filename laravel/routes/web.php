<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::group(['middleware' => 'visitors'], function () {
    Route::get('/register','RegistrationController@register');
    Route::post('/register', 'RegistrationController@postRegister');

    Route::get('/login','LoginController@login');
    Route::post('/login','LoginController@postLogin');

    Route::get('/','VisitorsController@home');
});

Route::post('/logout','LoginController@logout');

Route::get('/ahome','AdminController@ahome')->middleware('admin');
Route::get('/mhome','ModeratorController@mhome')->middleware('moderator');
Route::get('/uhome','UserController@uhome')->middleware('user');

//Route::get('/allCategories','CategoriesController@allCategories');
//Route::get('/food','CategoriesController@food');
//Route::get('/fun','CategoriesController@fun');
//Route::get('/science','CategoriesController@science');
//Route::get('/sport', 'CategoriesController@sport');
//Route::get('/style', 'CategoriesController@style');

Route::get('/allCategories','CategoriesController@allCategoriesArticles');
Route::get('/food','CategoriesController@foodArticles');
Route::get('/fun','CategoriesController@funArticles');
Route::get('/science','CategoriesController@scienceArticles');
Route::get('/sport', 'CategoriesController@sportArticles');
Route::get('/style', 'CategoriesController@styleArticles');



Route::get('/post','PostsController@post');
Route::post('/post', 'PostsController@createpost');

Route::get('/post', 'PostsController@getCategories');


Route::get('/manage', function () {
    return view('posts.manage');
});