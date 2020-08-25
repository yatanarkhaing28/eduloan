<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	//$items=Item::orderBy('id','desc')->take(6)->get();
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
    public function stuinfo($value='')
    {
        $students=Student::all();
        return view('frontend.stuinfo',compact('students'));
    }
}
