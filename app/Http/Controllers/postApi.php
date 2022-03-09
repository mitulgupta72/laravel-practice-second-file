<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class postApi extends Controller
{

    function index(Request $req)
    {
        $data = new Device;
        $data->id = $req->id;
        $data->name = $req->name;
        $data->people_id = $req->people_id;
        $indicate = $data->save();
        if ($indicate) {
            return ['result' => 'insertion sucesss'];
        } else {
            return ['result' => 'insertion failed!!!!'];
        }
            // return ['result' => 'insertion sucesss'];
    }

    function update(Request $req){
        $data= Device::find($req->id);
        $data->name=$req->name;
        $data->people_id=$req->people_id;
        $result=$data->save();
        if($result){
            return ['result'=>'updation sucess'];
        }
        else{
            return ['result'=>'updation failed!!'];
                    }
    }

    function delete($id){
        $data=Device::find($id);
        $result=$data->delete();
        if($result){
            return ['result'=>'deleletion sucess '];
        }
        else{
        return ['result'=>'deleletion failed!! '];

        }
    }

    function search($name){
         return Device::where('name','like','%'.$name.'%')->get();
        
    }

    function testApi(Request $req){
        $rules=array(
            'people_id'=>'required|min:2|max:4'
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }
        else{
            $device=new Device;
            $device->id=$req->id;
            $device->name=$req->name;
            $device->people_id=$req->people_id;
            $result=$device->save();
            if($result){

                return ['result'=>'sucess'];
            }
            else{
                return ['result'=>'failed!'];
            }
        }
    }
}
