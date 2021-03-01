<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmStarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_starship', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("film_id");
            $table->unsignedInteger("starship_id");

            $table->foreign("film_id")->references("id")->on("films");
            $table->foreign("starship_id")->references("id")->on("starships");
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
        Schema::dropIfExists('film_starship');
    }
}
