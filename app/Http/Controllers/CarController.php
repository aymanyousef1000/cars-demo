<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    //
    public function index(){
        $data = Car::get();
        return response()->json(["data"=>"test data"],200);

    }
}
