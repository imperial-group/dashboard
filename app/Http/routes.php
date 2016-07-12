<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::auth();

//Route::get('/home', ['middleware'=>'auth', 'uses'=>'HomeController@index']);
//Route::get('/test', ['middleware'=>'auth', 'uses'=>'HomeController@authTest']);

Route::group(['middleware'=>'auth'], function() {
    Route::get('/', function() { 
        return view('welcome');
    });
    Route::get('/home','HomeController@index');
    Route::get('/test','HomeController@authTest');
});
