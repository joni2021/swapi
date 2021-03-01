<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name",200)->index();
            $table->string("birth_year");
            $table->string("eye_color");
            $table->string("gender");
            $table->string("hair_color");
            $table->string("height");
            $table->string("mass");
            $table->string("skin_color");
            $table->unsignedInteger("specie_id")->nullable();
            $table->unsignedInteger("planet_id")->nullable();
            $table->date("created");
            $table->timestamp("edited");

            $table->foreign("specie_id")->references("id")->on("species");
            $table->foreign("planet_id")->references("id")->on("planets");

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
        Schema::dropIfExists('people');
    }
}
