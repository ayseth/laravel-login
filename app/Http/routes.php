<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    // return view('welcome');

    /*********2nd way*****************/

 //   if(Auth::check()){
 //
 //   	return "the user is logged in";
 //   }

/**************redirect user to a page after login*********/
//    if(Auth::attempt(['username'=>$username, 'password'=>$password])){
//
//   	return redirect()->intended('/admin');
//
 //   }

Auth::logout();
});

Route::auth();

Route::get('/home', 'HomeController@index');
