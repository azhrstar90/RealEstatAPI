<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ObjectsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TransactionController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Registration and Login
Route::middleware('auth:sanctum','guest')->group(function () {
    Route::post('/register', [RegisterController::class, 'register']);
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Object Routs
Route::group(['prefix'=>'Agancy', 'middleware'=>['auth:sanctum','PreventBackHistory']], function(){
    Route::get('ObjecsData', [ObjectsController::class, 'Objects_Getdata'])->name('ObjData');
    Route::get('ObjecsFilter', [ObjectsController::class, 'obj_filter'])->name('ObjFilter');
    Route::get('ObjWithTrans/{id}', [ObjectsController::class, 'objWithTrans'])->name('ObjWithTran');

});

//Clients Routs
Route::group(['prefix'=>'Agancy', 'middleware'=>['auth:sanctum','PreventBackHistory']], function(){
    Route::get('ClientData', [ClientsController::class, 'client_Getdata'])->name('cleintData');
    Route::get('ClientsWithTrans/{id}', [ClientsController::class, 'clientWithTrans'])->name('clientWithTran');

});
//transaction Routs
Route::group(['prefix'=>'Agancy', 'middleware'=>['auth:sanctum','PreventBackHistory']], function(){
    Route::get('TransactionData', [TransactionController::class, 'Trans_Getdata'])->name('TransData');
    Route::get('TrnasDetails/{id}', [TransactionController::class, 'TransDetails'])->name('TransDetail');

});

//Others Routs Methods
Route::group(['prefix'=>'Agancy', 'middleware'=>['auth:sanctum','PreventBackHistory']], function(){
    Route::get('OtherMethods', [ClientsController::class, 'OtheMethod'])->name('othermeth');
    Route::get('AddPageCilents', [ClientsController::class, 'Addclientinfo'])->name('addclient');
    Route::post('CreatCilents', [ClientsController::class, 'creatclientinfo'])->name('creatclient');
    Route::get('AddPageTrans', [TransactionController::class, 'AddTransinfo'])->name('AddTrans');
    Route::post('CreatTrans', [TransactionController::class, 'InsertTransData'])->name('creatTrans');
});

        


