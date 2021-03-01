<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_vehicle', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("film_id");
            $table->unsignedInteger("vehicle_id");

            $table->foreign("film_id")->references("id")->on("films");
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
        Schema::dropIfExists('film_vehicle');
    }
}
