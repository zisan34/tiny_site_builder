<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Toastr;
use App\User;
use App\UserTransaction;

class UserTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $start = isset($request->start) ? date('Y-m-d', strtotime($request->start)) : date('Y-m-01');

        $end = isset($request->end) ? date('Y-m-d', strtotime($request->end)) : date('Y-m-t');

        if(Auth::user()->hasRole('Admin') || (Auth::user()->hasRole('Mess Manager')))
        {
            $user_transactions = UserTransaction::whereBetween('transaction_date',  [$start, $end])->orderBy('transaction_date', 'desc')->get();

            $users = User::orderBy('name')->get();
        }
        else
        {
            $user_transactions = UserTransaction::whereBetween('transaction_date',  [$start, $end])->orderBy('transaction_date', 'desc')->where('user_id', Auth::id())->get();

            $users = User::orderBy('name')->where('id', Auth::id())->get();            
        }


        return view('admin.mess.transaction.index', compact('user_transactions', 'users'));
    }



    public function viewData(Request $request)
    {
        //user_id: "1", start: "2019-12-01", end: "2019-12-31"
        $user = User::find($request->user_id);

        $vals = $user->transactions;

        return json_encode($vals);
        exit();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



    public function make_payment(Request $request)
    {
        if($request->transaction_id)
        {
            $transaction = UserTransaction::find($request->transaction_id);
            $transaction->updated_by = Auth::id();
        }
        else
        {
            $transaction = new UserTransaction;
            $transaction->user_id = $request->user;
            $transaction->transaction_type = 1;
            $transaction->created_by = Auth::id();
        }
        
        // if(Auth::user()->hasRole('Admin'))
        //     $transaction->confimation = 1;
        // else
            $transaction->confimation = 0;

        $transaction->transaction_date = date('Y-m-d', strtotime($request->pay_date));
        $transaction->amount = $request->payment_amount;
        $transaction->reference = $request->reference;
        $transaction->note = "Payment";
        $transaction->save();

        Toastr::success('Payment done!');

        return redirect()->route('user-transaction.index');
    }


    public function confirm_payment($tr_id)
    {
        $transaction = UserTransaction::find($tr_id);
        $transaction->confimation = 1;
        $transaction->updated_by = Auth::id();
        $transaction->save();
        Toastr::success('Payment confirmed!');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return $transaction = UserTransaction::find($id);

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
        $transaction = UserTransaction::find($id);
        $transaction->deleted_by = Auth::id();
        $transaction->save();
        $transaction->delete();
        Toastr::success('Data deleted successfully!');
        return redirect()->back();
    }
}
