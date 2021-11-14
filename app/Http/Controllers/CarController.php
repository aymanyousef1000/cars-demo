<?php

namespace App\Http\Controllers;

use App\Models;
use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    //
    public function index(){
        $data = car::get();
        return response()->json($data,200);

    }
}
