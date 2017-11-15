<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request)
    {
        $user=Auth::user();
//        session(['peter'=>'student']);
//return $request->session()->get('edwin');
//       return view('home',compact('user'));

  session(['abrar'=>'hello']);

  session(['abrar'=>'great']);
$request->session()->flush();
  return session()->all();

    }
}
