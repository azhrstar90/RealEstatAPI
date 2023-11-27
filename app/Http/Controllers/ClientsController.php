<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\clients;

class ClientsController extends Controller
{
    // to get all data and fetch them
    public function client_Getdata() {
        $ClientDatas = DB::table('clients')
                          ->join('users', 'clients.AdminID', '=', 'users.id')
                          ->select('clients.*', 'users.name as userName') 
                          ->paginate(1000);
        return view('clients.clientdata', ['ClientDatas' => $ClientDatas]);
    }

    function clientWithTrans($clientId)  {
        $ClientTrans = clients::with('transactions')->findOrFail($clientId);
        
        return view('clients.clientswithtrans', compact('ClientTrans'));
    }  

    // page Add client and transaction
    public function OtheMethod()
    {
        return view('othermethod');
    }
    public function Addclientinfo()
    {
        return view('clients.Addclients');
    }

    public function creatclientinfo(Request $request)
    {
        $request->validate([
            'clientname'    => ['required','string'],
            'clientType'    => ['required','string'],
            'contact'       => ['required','string'],

         ],[
             'required' => 'This Field Is Requires'
         ]);

        DB::table('clients')->insert([
            'Client_name'                    => $request->clientname ,
            'Client_type'                    => $request->clientType ,
            'Client_contactDetails'          => $request->contact ,
            'AdminID'                        => Auth::user()->id,
            'Client_Created'                 => now() ,
            'Client_Updated'                 => now() ,
        ]);
        return back()->with('success','You Add Client Successfuly!');
    }


}
