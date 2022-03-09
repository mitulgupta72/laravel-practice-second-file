<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstApi;
use App\Http\Controllers\getApi;
use App\Http\Controllers\postApi;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\fileController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('firstapi',[firstApi::class,'index']);
Route::group(['middleware' => 'auth:sanctum'], function(){

    Route::get('getapi',[getApi::class,'index']);
    Route::post('index',[postApi::class,'index']);
    Route::put('update',[postApi::class,'update']);
    Route::delete('delete/{id}',[postApi::class,'delete']);
    Route::get('search/{name}',[postApi::class,'search']);
    Route::post('save',[postApi::class,'testApi']);
    Route::apiResource('resourcecontroller',resourceController::class);

    //All secure URL's

    });

Route::post("login",[UserController::class,'index']);
Route::post('file',[fileController::class,'index']);

