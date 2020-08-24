<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments=Payment::all();
        return view('backend.payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loans = Loan::all();
        return view('backend.payments.create',compact('loans'));
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
            'installment'=>'required',
            'balance'=>'required',
            'paymentdate'=>'required',
            'loan'=>'required',
            
            
        ]);
        // If include file, upload
        // file upload
        
        // Data insert
        $payment=new Payment;
        $payment->installment=$request->installment;
        $payment->balance=$request->balance;
        $payment->paymentdate= date('Y-m-d');
        $payment->loan_id=$request->loan;
        
        
        $payment->save();
        // Redirect
        return redirect()->route('payments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $loans=Loan::all();
        $payment=Payment::find($id);

        return view('backend.payments.edit',compact('loans','payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loans=Loan::all();
        $payment=Payment::find($id);

        return view('backend.payments.edit',compact('loans','payment'));
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
            
            'installment' =>'required',
            'balance' =>'required',
            'paymentdate' =>'required',
            'loan' =>'required'

        ]);
        //data update
        $payment=Payment::find($id);
        $payment->installment=$request->installment;
        $payment->balance=$request->balance;
        $payment->paymentdate=$request->paymentdate;
        $payment->loan_id=$request->loan;
        $payment->save();

        //redirect
        return redirect()->route('payments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment=Payment::find($id);
        $payment->delete();
        // redirect
        return redirect()->route('payments.index');
    }
}
