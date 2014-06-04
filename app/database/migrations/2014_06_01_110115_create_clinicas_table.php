<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clinicas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('iduser')->unsigned();
			$table->string('descripcion');
			$table->string('direccion');
			$table->text('latitud');
			$table->text('longitud');
			$table->timestamps();
            $table->softDeletes();
		});

        Schema::table('clinicas',function(Blueprint $tabla)
        {
            $tabla->foreign('iduser')->references('id')->on('users');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('clinicas',function(Blueprint $tabla)
        {
            $tabla->dropForeign('clinicas_iduser_foreign');
        });

		Schema::drop('clinicas');
	}

}
