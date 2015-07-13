<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeliculaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Pelicula', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo',100);
			$table->string('sinopsis',500);
			$table->string('trailer_url',200);
			$table->binary('image')->nullable();
			$table->string('rated',20);
			$table->string('genero',50);
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
		Schema::drop('Pelicula');
	}

}
