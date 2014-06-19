<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetalleServiciosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_servicios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idservicio')->unsigned();
			$table->integer('idclinica')->unsigned();
			$table->timestamps();
            $table->softDeletes();
		});

        Schema::table('detalle_servicios', function(Blueprint $table)
        {
            $table->foreign('idservicio')->references('servicios')->on('id');
            $table->foreign('idclinica')->references('clinicas')->on('id');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detalle_servicios');
	}

}
