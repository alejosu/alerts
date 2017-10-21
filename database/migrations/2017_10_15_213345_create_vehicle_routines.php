<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleRoutines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_routines', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->date('nextDate');
            $table->double('nextKm');
        
            $table->integer('routine_id')->unsigned();
            $table->integer('vehicle_id')->unsigned();
            
            $table->foreign('routine_id')->references('id')->on('routines');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_routines');
    }
}
