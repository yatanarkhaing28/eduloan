<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	// $items=Item::orderBy('id','desc')->take(6)->get();
    	// // dd($items);
    	return view('frontend.home');
    }
    public function register()
    {
        return view('frontend.register');
    }

    public function login()
    {
        return view('frontend.login');
    }

    

    public function profile()
    {
        return view('frontend.profile');
    }
}
