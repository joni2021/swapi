<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('starships', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name",200)->index();
            $table->string("model",200)->index();
            $table->string("starship_class");
            $table->string("manufacturer");
            $table->string("cost_in_credits");
            $table->string("length");
            $table->string("crew");
            $table->string("passengers");
            $table->string("max_atmosphering_speed");
            $table->string("hyperdrive_rating");
            $table->string("MGLT");
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
        Schema::dropIfExists('starships');
    }
}
