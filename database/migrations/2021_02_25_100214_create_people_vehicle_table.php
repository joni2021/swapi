<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_vehicle', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("people_id");
            $table->unsignedInteger("vehicle_id");

            $table->foreign("people_id")->references("id")->on("people");
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people_vehicle');
    }
}
