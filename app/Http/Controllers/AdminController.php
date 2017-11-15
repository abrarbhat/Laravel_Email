<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function  __construct()
    {
        $this->middleware('isadmin');

    }
public function index(){

        return "cong u r admin";

}

}
