<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArreglandoClinicas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('clinicas',function(Blueprint $tabla)
        {
            $tabla->string('razon_social');
            $tabla->string('telefono');
            $tabla->string('ciudad');
            $tabla->string('email');
            $tabla->text('resumen');
            $tabla->string('facebook');
            $tabla->string('twitter');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
