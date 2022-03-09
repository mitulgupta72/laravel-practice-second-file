<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Device;
use App\Models\Mutator;

class multipledatabaseController extends Controller
{
    function index(){
        return Mutator::all();
        // return Device::all();
        // return DB::table('devices')->get();
        // return DB::connection('mysql2')->table('mutator')->get();
    }
}
