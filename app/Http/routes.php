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

   return view('welcome');
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

// Auth::logout();
 });

Route::auth();

Route::get('/home', 'HomeController@index');

/**********************Middleware*******************/

// for multiple middlewares, add a ',' after role and add middlewares like ['role', 'auth', 'web']

Route::get('/admin/user/roles',  ['middleware'=>'role', function(){

	return "Middleware Role";

}]);


/*******Admin*****************/

Route::get('/admin', 'AdminController@index');
