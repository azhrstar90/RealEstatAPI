<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\trans_objectModel;

class ObjectsController extends Controller
{
        // to get all data and fetch them
        public function Objects_Getdata(){
            $ObjectsDatas =array(
                'ObjectsDatas' => DB::table('realestateobjects')->paginate(20)
            );
            return view('object.objectdata',$ObjectsDatas);
        }
    
}
