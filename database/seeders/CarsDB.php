<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;
use App\Models\Car;

class CarsDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10 ; $i++) { 
            # code...
            $add = new Car();
            $add->FIELD1 = $i;
            $add->Name   = 'new name '.$i;
            $add->Location   = 'new city '.$i;
            $add->Year   = 'new year '.$i;
            $add->Kilometers_Driven   = 'new km '.$i;
            $add->Fuel_Type   = 'new type '.$i;
            $add->Transmission   = 'new transmission '.$i;
            $add->Owner_Type   = 'new owner '.$i;
            $add->Mileage   = 'new miles '.$i;
            $add->Engine   = 'new engine '.$i;
            $add->Power   = 'new power '.$i;
            $add->Seats   = 'new seats '.$i;
            $add->New_Price   = 'New_Price '.$i;
            $add->save();
        }
    }
}
