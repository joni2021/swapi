<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleStarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_starship', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedInteger("people_id");
            $table->unsignedInteger("starship_id");

            $table->foreign("people_id")->references("id")->on("people");
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
        Schema::dropIfExists('people_starship');
    }
}
