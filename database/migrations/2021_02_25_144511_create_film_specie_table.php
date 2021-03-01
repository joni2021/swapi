<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmSpecieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_specie', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("film_id");
            $table->unsignedInteger("specie_id");

            $table->foreign("film_id")->references("id")->on("films");
            $table->foreign("specie_id")->references("id")->on("species");
            $table->engine = 'InnoDB';;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_specie');
    }
}
