<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name",200)->index();
            $table->string("model",200)->index();
            $table->string("vehicle_class");
            $table->string("manufacturer");
            $table->string("length");
            $table->string('cost_in_credits');
            $table->string("crew");
            $table->string("passengers");
            $table->string("max_atmosphering_speed");
            $table->string("cargo_capacity");
            $table->string("consumables");
            $table->smallInteger("count")->default(0);
            $table->date("created");
            $table->timestamp("edited");
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
        Schema::dropIfExists('vehicles');
    }
}
