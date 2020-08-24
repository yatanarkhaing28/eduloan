<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Financial;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financials=Financial::all();
        return view('backend.financials.index',compact('financials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('backend.financials.create',compact('students'));
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
            'educationexp'=>'required',
            'accomodationexp'=>'required',
            'utilityexp'=>'required',
            'monthlyincome'=>'required',
            'student'=>'required',
            
        ]);
        // If include file, upload
        // file upload
        
        // Data insert
        $financial=new Financial;
        $financial->education_exp=$request->educationexp;
        $financial->accomodation_exp=$request->accomodationexp;
        $financial->utility_exp=$request->utilityexp;
        $financial->monthly_income=$request->monthlyincome;
        $financial->student_id=$request->student;
        
        $financial->save();
        // Redirect
        return redirect()->route('financials.index');
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
        $students=Student::all();
        $financial=Financial::find($id);
        return view('backend.financials.edit',compact('students', 'financial'));
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
        $request->validate([
            'educationexp'=>'required',
            'accomodationexp'=>'required',
            'utilityexp'=>'required',
            'monthlyincome'=>'required',
            'student'=>'required',
        ]);

        // If include file, upload
        // file upload
        
        // Data insert
        $financial=Financial::find($id);
        $financial->education_exp=$request->educationexp;
        $financial->accomodation_exp=$request->accomodationexp;
        $financial->utility_exp=$request->utilityexp;
        $financial->monthly_income=$request->monthlyincome;
        $financial->student_id=$request->student;
        
        $financial->save();
        return redirect()->route('financials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financial=Financial::find($id);
        $financial->delete();
        // redirect
        return redirect()->route('financials.index'); 
    }
}
