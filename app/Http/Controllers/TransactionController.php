<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Transactions;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    // to get all data and fetch them
    public function Trans_Getdata() {
        $TransDatas = DB::table('transactions')
                            ->join('users', 'transactions.AdminID', '=', 'users.id')
                            ->select('transactions.*', 'users.name as userName') 
                            ->paginate(1000);
        return view('transactions.transactiondata', ['TransDatas' => $TransDatas]);
    }

    public function TransDetails($transactionId)
    {
        $trans = Transactions::with(['transwithObjects', 'transwithclients'])->findOrFail($transactionId);

        return view('transactions.transdetails', compact('trans'));
    }
    public function AddTransinfo()
    {
        return view('transactions.AddTrans');
    }
    public function InsertTransData(Request $request)
    {
        $request->validate([
            'transType'       => ['required','string'],

         ],[
             'required' => 'This Field Is Requires'
         ]);
        // Inserting a transaction
        $transactionId = DB::table('transactions')->insertGetId([
            'Transaction_status'        => $request->transType ,
            'Transaction_date'          => now(),
            'AdminID'                   => Auth::user()->id,
            'Transaction_Created'       => Carbon::now(),
            'Transaction_Updated'       => Carbon::now(),
        ]);

        // Get the last Real Estate Object's ID
        $realEstateObjectId = DB::table('realestateobjects')->orderBy('object_ID', 'desc')->first();
        $lastRealEstateObjectId = $realEstateObjectId ? $realEstateObjectId->object_ID : null;

        // Get the last Client's ID
        $clientId = DB::table('clients')->orderBy('Client_ID', 'desc')->first();
        $lastClientId = $clientId ? $clientId->Client_ID : null;
        
        // Linking transaction to a real estate object
        DB::table('trnasaction_object')->insert([
            'Trans_ID'   => $transactionId,
            'Object_ID'  => $lastRealEstateObjectId,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        // Linking transaction to a client
        DB::table('clienttransaction')->insert([
            'client_id'      => $lastClientId,
            'transaction_id' => $transactionId,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);            
        return back()->with('success','You Add Transaction Successfuly!');
    }
}
