<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('FIELD1');
            $table->string('Name');
            $table->string('Location');
            $table->string('Year');
            $table->string('Kilometers_Driven');
            $table->string('Fuel_Type');
            $table->string('Transmission');
            $table->string('Owner_Type');
            $table->string('Mileage');
            $table->string('Engine');
            $table->string('Power');
            $table->string('Seats');
            $table->string('New_Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
