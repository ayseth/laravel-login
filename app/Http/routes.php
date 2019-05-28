<?php

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Mailgun\Mailgun;


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

// Auth::logout();

/***************MAIL GUN********************/
$data = [

	'title'=> 'Hey there hope you are having a good day',
	'content' => 'This is a post to show if mail gun is working or not'

];

Mail::send('emails.test', $data, function($message) //emails.test is a view
{

	$message->to('aysait101@gmail.com', 'Abir Sait')->subject('Hey there how are you ?');           //mail going to
});         

 });

// Route::auth();

// Route::get('/home', 'HomeController@index');

// /**********************Middleware*******************/

// // for multiple middlewares, add a ',' after role and add middlewares like ['role', 'auth', 'web']

// Route::get('/admin/user/roles',  ['middleware'=>'role', function(){

// 	return "Middleware Role";

// }]);


// /*******Admin*****************/

// Route::get('/admin', 'AdminController@index');
