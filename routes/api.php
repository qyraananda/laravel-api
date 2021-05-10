<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testing',[App\Http\Controllers\TestingController::class,'index']);
Route::post('testing',[App\Http\Controllers\TestingController::class,'create']);
Route::put('/testing/{id}',[App\Http\Controllers\TestingController::class,'@update']);
Route::delete('/testing/{id}',[App\Http\Controllers\TestingController::class,'@delete']);