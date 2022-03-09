<?php

use App\Http\Controllers\multipledatabaseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\routemodelController;
// use App\Http\Controllers\multipledatabaseController;
use App\Mail\SampleMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$data ='hi,lets learn laravel';
// previous string way
// $data=Str::ucfirst($data);
// $data=Str::replaceFirst("Hi","hello",$data);
// $data=Str::camel($data);
$data=Str::of($data)   //fluent string way
    ->ucfirst($data)
    ->replaceFirst('Hi','Hello',$data)
    ->camel($data);
// echo $data;


Route::get('/', function () {
    return new SampleMail();
    // return view('welcome');
});

Route::get('routemodelcontroller/{key:name}',[routemodelController::class,'index']);

Route::get('multipledatabasecontroller',[multipledatabaseController::class,'index']);



