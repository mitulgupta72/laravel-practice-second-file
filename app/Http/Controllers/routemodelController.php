<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class routemodelController extends Controller
{
 function index(Device $key){
     return $key;

 }
}
