<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActoresPeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_pelicula', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actor_id')->unsigned();
            $table->integer('pelicula_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actores')->onDelete('CASCADE')->onCascade('CASCADE');
            $table->foreign('pelicula_id')->references('id')->on('peliculas')->onDelete('CASCADE')->onCascade('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_pelicula');
    }
}
