<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
    //return view('welcome');
    Route::get('/', 'SiteController@index');
    Route::get('site/product','SiteController@singleproduct');
    Route::get('site/product/{id}','SiteController@singleproduct');
    Route::get('shoppage','SiteController@shoppage');
    Route::get('site/contact','SiteController@contact');
    
    
   
//});

Auth::routes();

Route::get('/home', 'HomeController@index');
