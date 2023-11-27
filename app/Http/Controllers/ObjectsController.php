<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\RealEstateObject;
use RealRashid\SweetAlert\Facades\Alert;

class ObjectsController extends Controller
{
        // to get all data and fetch them
        public function Objects_Getdata() {
            $ObjectsDatas = DB::table('realestateobjects')
                              ->join('users', 'realestateobjects.AdminID', '=', 'users.id')
                              ->select('realestateobjects.*', 'users.name as userName') 
                              ->paginate(1000);
            return view('objects.objectdata', ['ObjectsDatas' => $ObjectsDatas]);
        }
        
            /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
        protected function validator(array $data)
    {
        return Validator::make($data, [
            'type' => 'string|nullable',
            'min_price' => 'numeric|nullable',
            'max_price' => 'numeric|nullable',
        ]);
    }
        function obj_filter(Request $request)
    {
        $filters = $request->only(['type', 'min_price', 'max_price']);
        $ObjectsDatas = RealEstateObject::filter($filters)
                        ->join('users', 'realestateobjects.AdminID', '=', 'users.id')
                        ->select('realestateobjects.*', 'users.name as userName') 
                        ->orderBy('object_price', 'asc')
                        ->get();
        return view('objects.objectFilter', compact('ObjectsDatas'));
    }


    function objWithTrans($objectId)  {
        $ObjectsTrans = RealEstateObject::with('transactions')->findOrFail($objectId);
        
        return view('objects.objectTransaction', compact('ObjectsTrans'));
    }  
}


