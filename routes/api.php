<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/register', [AuthController::class, 'register'])->name('myreg');
Route::post('/login', [AuthController::class, 'login'])->name('mylog');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


