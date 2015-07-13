<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarteleraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Cartelera', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sala_id')->unsigned();
			$table->integer('pelicula_id')->unsigned();
			$table->integer('formatopelicula_id')->unsigned();
			$table->string('formato_lenguaje',10);
			$table->date('fecha');
			$table->time('hora');

			$table->foreign('sala_id')->references('id')->on('Sala')->onDelete('cascade');
			$table->foreign('pelicula_id')->references('id')->on('Pelicula')->onDelete('cascade');
			$table->foreign('formatopelicula_id')->references('id')->on('FormatoPelicula')->onDelete('cascade');
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
		Schema::drop('Cartelera');
	}

}
