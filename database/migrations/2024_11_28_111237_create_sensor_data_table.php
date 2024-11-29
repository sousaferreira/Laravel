<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorDataTable extends Migration
{
    public function up()
{
    Schema::create('sensor_data', function (Blueprint $table) {
        $table->id();
        $table->float('luminosity');
        $table->float('rain');
        $table->float('temperature')->nullable();
        $table->float('humidity')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('sensor_data');
    }
}
