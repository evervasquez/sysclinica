<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModulosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modulos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descipcion');
			$table->string('url');
			$table->string('icono');
            $table->integer('idpadre')->unsigned();
			$table->timestamps();
            $table->softDeletes();
		});

        Schema::table('modulos',function(Blueprint $tabla)
        {
            $tabla->foreign('idpadre')->references('id')->on('modulos');
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('modulos',function(Blueprint $tabla)
        {
            $tabla->dropForeign('modulos_idpadre_foreing');
        });

		Schema::drop('modulos');
	}

}
