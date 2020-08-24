<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Financial;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans=Loan::all();
        return view('backend.loans.index',compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $financials = Financial::all();
        return view('backend.loans.create',compact('financials'));
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
            'amount'=>'required',
            'loantime'=>'required',
            'date'=>'required',
            'financial1'=>'required',
            'financial2'=>'required',
            'financial3'=>'required',
            
        ]);
        // If include file, upload
        // file upload
        
        // Data insert
        $loan=new Loan;
        $loan->amount=$request->amount;
        $loan->loantime=$request->loantime;
        $loan->date= date('Y-m-d');
        $loan->financial_id=$request->financial1;
        $loan->financial_id=$request->financial2;
        $loan->financial_id=$request->financial3;
        
        $loan->save();
        // Redirect
        return redirect()->route('loans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loan=Loan::find($id);
        // dd($item;)
        return view('backend.loans.show',compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $financials=Financial::all();
        $loan=Loan::find($id);
        return view('backend.loans.edit',compact('financials', 'loan'));
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
            'amount'=>'required',
            'date'=>'required',
            'loantime'=>'required',
            'financial'=>'required',
        ]);

        // If include file, upload
        // file upload
        
        // Data insert
        $loan=Loan::find($id);
        $loan->amount=$request->amount;
        $loan->date=$request->date;
        $loan->loantime=$request->loantime;
        $loan->financial_id=$request->financial;
        
        $loan->save();
        return redirect()->route('loans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $loan=Loan::find($id);
        $loan->delete();
        // redirect
        return redirect()->route('loans.index'); 
    }
}
