<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Mutator;

class getApi extends Controller
{
    function index(){
        // return Device::all();

// you can also use more than one database in an api

$details = Mutator::all();
$products = Device::all();
return [$products,$details];
    }
}
