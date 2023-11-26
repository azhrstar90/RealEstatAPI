<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ObjectsController;



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

});

    // Add more protected routes here

