<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name")->index();
            $table->string("classification");
            $table->string("designation");
            $table->string("average_height");
            $table->string("average_lifespan");
            $table->string("eye_colors");
            $table->string("hair_colors");
            $table->string("skin_colors");
            $table->string("language");
            $table->string("created");
            $table->string("edited");

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
        Schema::dropIfExists('species');
    }
}
