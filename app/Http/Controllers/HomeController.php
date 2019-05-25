<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
      
        // $request->session()->put(['kare'=>'master', 'student']);

        // $request->session()->get('kare');

        /*****Updating session********/

        // session(['kare2'=>'gamer']);

        // return session('kare2');

        /******************Deleting session************/
        // $request->session()->forget('kare');

        $request->session()->flush();
        return $request->session()->all();

        // return view('home');
    }
}
