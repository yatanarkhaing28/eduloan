<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Educationdetail;
use App\Financial;

class StudentController extends Controller
{   
    // public function __construct($value=''){
    //     $this->middleware('role:admin')->except('store');
    //     $this->middleware('role:customer')->only('store');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('backend.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.students.create');
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
            'name'=>'required',
            'photo'=>'required',
            'fathername'=>'required',
            'nrcno'=>'required',
            'state'=>'required',
            'city'=>'required',
            'phoneno'=>'required',
            
        ]);
        // If include file, upload
        // file upload
        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/studentimg'),$imageName);

        $myfile='backend/studentimg/'.$imageName;
        // Data insert
        $student=new Student;
        $student->name=$request->name;
        $student->photo=$myfile;
        $student->fathername=$request->fathername;
        $student->nrcno=$request->nrcno;
        $student->state=$request->state;
        $student->city=$request->city;
        $student->phoneno=$request->phoneno;
        
        
        $student->save();
        // Redirect
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        // dd($student->educationdetails);
        return view('backend.students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student=Student::find($id);
        return view('backend.students.edit',compact('student'));
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
            'name'=>'required',
            'photo'=>'sometimes',
            'fathername'=>'required',
            'nrcno'=>'required',
            'state'=>'required',
            'city'=>'required',
            'phoneno'=>'required',

        ]);

        // If include file, upload
        // file upload
        if ($request->hasFile('photo')) {

        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/studentimg'),$imageName);

        $myfile='backend/studentimg/'.$imageName;
        }else{
            $myfile=$request->oldphoto;
        }
        // Data insert
        $student=Student::find($id);
        $student->name=$request->name;
        $student->photo=$myfile;
        $student->fathername=$request->fathername;
        $student->nrcno=$request->nrcno;
        $student->state=$request->state;
        $student->city=$request->city;
        $student->phoneno=$request->phoneno;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        // redirect
        return redirect()->route('students.index');
    }
}
