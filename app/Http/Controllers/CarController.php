<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    //
    public function index(){
        $data = Car::get();
        return response()->json($data,200);

    }


    public function store(Request $request){
        
        // data validation 
        $validate = Validator::make($request->all(), [
            "Name"               => "required",
            "Location"            => "required",
            "Year"               => "required",
            "Kilometers_Driven"  => "required",
            "Fuel_Type"          => "required",
            "Transmission"       => "required",
            "Owner_Type"         => "required",
            "Mileage"            => "required",
            "Engine"             => "required",
            "Power"              => "required",
            "Seats"              => "required"
        ]);


        if ($validate->fails()) {
            # check if there are any errors and return it ...
            $errors = $validate->errors();
            return response()->json($errors,400);
        }else {
            # make an insert operation ...
            $op = Car::create($request->all());

            // check if this operation is sucessed or no ... 
            if ($op) {
                # if sucessed...
                $message = 'operation success'; 
                return response()->json($message,200);               
            }else {
                # if not sucessed...
                $message = 'operation faild';
                return response()->json($message,400);
            }

        }


    }








}
