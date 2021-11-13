<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function index(){
        $data = Car::get();
        return response()->json($data,200);
    }
}
