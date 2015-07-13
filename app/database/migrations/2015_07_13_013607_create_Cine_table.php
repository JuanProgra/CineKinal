<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Cine', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',200);
			$table->string('direccion',500);
			$table->string('telefono',10);
			$table->double('latitud',20,8);
			$table->double('longitud',20,8);
			$table->time('hora_apertura');
			$table->time('hora_cierre');
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
		Schema::drop('Cine');
	}

}
