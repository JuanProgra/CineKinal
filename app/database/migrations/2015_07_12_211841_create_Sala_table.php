<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Sala', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cine_id')->unsigned();
			$table->integer('numero');
			$table->integer('tiposala_id')->unsigned();
			$table->foreign('cine_id')->references('id')->on('Cine')->onDelete('cascade');
			$table->foreign('tiposala_id')->references('id')->on('TipoSala')->onDelete('cascade');
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
		Schema::drop('Sala');
	}

}
