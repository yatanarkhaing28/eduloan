<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stu;
use App\Education;

class EducationdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educationdetails=Education::all();
        return view('backend.educationdetails.index',compact('educationdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Stu::all();
        return view('backend.educationdetails.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // Validation
        $request->validate([
            'rollno'=>'required',
            'university'=>'required',
            'year'=>'required',
            'semester'=>'required',
            'student'=>'required',
            
        ]);
        // If include file, upload
        // file upload
        
        // Data insert
        $educationdetail=new Education;
        $educationdetail->name=$request->name;
        $educationdetail->student_id=$request->student;
        
        $educationdetail->save();
        // Redirect
        return redirect()->route('educationdetails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
