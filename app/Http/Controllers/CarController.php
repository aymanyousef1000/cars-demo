<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //
    public function index(){
        $data = car::get();
        return response()->json($data,200);

    }
}
