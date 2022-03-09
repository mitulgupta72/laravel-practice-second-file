<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstApi extends Controller
{
    function index (){
        return ['name'=>'mitul','email'=>'mitul@gmail.com'];
    }
}
